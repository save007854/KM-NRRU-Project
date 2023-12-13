<?php

   //create
   if(isset($_POST['submit'])){
      $bt_groupid = $_POST['bt_groupid'];
      $bt_groupname = $_POST['bt_groupname'];
      $bt_note = $_POST['bt_note'];

      if($bt_groupname != ''){
         $stmt = $db->prepare('INSERT INTO btknowledge (bt_groupid,bt_groupname,bt_note) 
         VALUES (:bt_groupid,:bt_groupname,:bt_note)');
         $stmt->execute(array(
            ':bt_groupid' => $bt_groupid,
            ':bt_groupname' => $bt_groupname,
            ':bt_note' => $bt_note
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