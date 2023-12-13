<?php

   //create
   if(isset($_POST['submit'])){
      $bt_knowledgepass = $_POST['bt_knowledgepass'];
      $bt_knowledgename = $_POST['bt_knowledgename'];

      if($bt_knowledgename != ''){
         $stmt = $db->prepare('INSERT INTO btknowl (bt_knowledgepass,bt_knowledgename)
         VALUES (:bt_knowledgepass,:bt_knowledgename)');
         $stmt->execute(array(
            ':bt_knowledgepass' => $bt_knowledgepass,
            ':bt_knowledgename' => $bt_knowledgename
         ));
         $id=$db->lastInsertId('id');
         header("Location:editorinfo?id=".$id);
      }else{
         echo "error !";
      }
   }

   $Bt_groupid="editor";
   include('layout/header.php');
   include('layout/editor.php');
   include('layout/footer.php');
?>