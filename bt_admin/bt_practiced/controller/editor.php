<?php

   //create
   if(isset($_POST['submit'])){
      $bt_years = $_POST['bt_years'];
      $bt_titleth = $_POST['bt_titleth'];
      $bt_titleeng = $_POST['bt_titleeng'];
      $bt_source = $_POST['bt_source'];
      $bt_objective = $_POST['bt_objective'];
      $bt_targetgroup = $_POST['bt_targetgroup'];
      $bt_process = $_POST['bt_process'];
      $bt_result = $_POST['bt_result'];
      $bt_factor = $_POST['bt_factor'];
      $bt_tool = $_POST['bt_tool'];
      $bt_refer = $_POST['bt_refer'];
      $bt_author = $_POST['bt_author'];
      $bt_practicegroup = $_POST['bt_practicegroup'];
      $bt_responsible = $_POST['bt_responsible'];
      $bt_contact = $_POST['bt_contact'];


      if($bt_source != ''){
         $stmt = $db->prepare('INSERT INTO btpracticed (bt_years,bt_titleth,bt_titleeng,bt_source,bt_objective,bt_targetgroup,bt_process,bt_result,bt_factor,bt_tool,bt_refer,bt_author,bt_practicegroup,bt_responsible,bt_contact) 
         VALUES (:bt_years,:bt_titleth,:bt_titleeng,:bt_source,:bt_objective,:bt_targetgroup,:bt_process,:bt_result,:bt_factor,:bt_tool,:bt_refer,:bt_author,:bt_practicegroup,:bt_responsible,:bt_contact)');
         $stmt->execute(array(
            ':bt_years' => $bt_years,
            ':bt_titleth' => $bt_titleth,
            ':bt_titleeng' => $bt_titleeng,
            ':bt_source' => $bt_source,
            ':bt_objective' => $bt_objective,
            ':bt_targetgroup' => $bt_targetgroup,
            ':bt_process' => $bt_process,
            ':bt_result' => $bt_result,
            ':bt_factor' => $bt_factor,
            ':bt_tool' => $bt_tool,
            ':bt_refer' => $bt_refer,
            ':bt_author' => $bt_author,
            ':bt_practicegroup' => $bt_practicegroup,
            ':bt_responsible' => $bt_responsible,
            ':bt_contact'=> $bt_contact
         ));
         $id=$db->lastInsertId('id');
         header("Location:editorinfo?id=".$id);
      }else{
         echo "error !";
      }
   }

   $Bt_years="editor";
   include('layout/header.php');
   include('layout/editor.php');
   include('layout/footer.php');
?>