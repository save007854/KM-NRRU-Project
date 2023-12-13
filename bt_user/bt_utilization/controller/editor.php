<?php

   //create
   if(isset($_POST['submit'])){
      $bt_utilizationorder = $_POST['bt_utilizationorder'];
      $bt_years = $_POST['bt_years'];
      $bt_utilizaname = $_POST['bt_utilizaname'];
      $bt_academic = $_POST['bt_academic'];
      $bt_public = $_POST['bt_public'];
      $bt_policy = $_POST['bt_policy'];
      $bt_commercial = $_POST['bt_commercial'];

      if($bt_academic != ''){
         $stmt = $db->prepare('INSERT INTO btutilization (bt_utilizationorder,bt_years,bt_utilizaname,bt_academic,bt_public,bt_policy,bt_commercial) 
         VALUES (:bt_utilizationorder,:bt_years,:bt_utilizaname,:bt_academic,:bt_public,:bt_policy,:bt_commercial)');
         $stmt->execute(array(
            ':bt_utilizationorder' => $bt_utilizationorder,
            ':bt_years' => $bt_years,
            ':bt_utilizaname' => $bt_utilizaname,
            ':bt_academic' => $bt_academic,
            ':bt_public' => $bt_public,
            ':bt_policy' => $bt_policy,
            ':bt_commercial' => $bt_commercial
         ));
         $id=$db->lastInsertId('id');
         header("Location:editorinfo?id=".$id);
      }else{
         echo "error !";
      }
   }

   $Bt_utilizationorder="editor";
   include('layout/header.php');
   include('layout/editor.php');
   include('layout/footer.php');
?>