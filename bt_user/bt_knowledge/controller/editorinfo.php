<?php

   //read
   if(isset($_GET['id'])){
   $id=$_GET['id'];
   $stmt = $db->prepare('SELECT * FROM `btknowledge` WHERE `id` = :id');
   $stmt->execute(array(':id'=> $id));
   $rows = $stmt->fetchAll();
   }
   
   //delete
   if(isset($_POST['delete'])){
      $id=$_GET['id'];
      $stmt = $db->prepare('DELETE FROM btknowledge WHERE id=:id');
      $stmt->execute(array(':id' => $id));
      header("Location:home");
   }

   //update
   if(isset($_POST['submit'])){
         $id=$_GET['id'];
         $bt_groupid=$_POST['bt_groupid'];
         $bt_groupname=$_POST['bt_groupname'];
         $bt_note=$_POST['bt_note'];

      $stmt = $db->prepare('UPDATE btknowledge SET `bt_groupid` = :bt_groupid, `bt_groupname` = :bt_groupname, `bt_note` = :bt_note WHERE `id` = :id');
      $stmt->execute(array(
         ':id'=>$id,
         ':bt_groupid' => $bt_groupid,
         ':bt_groupname' => $bt_groupname,
         ':bt_note' => $bt_note
      ));
      header("Location:editorinfo?id=".$id);
   }

   if(isset($_POST['output'])){
      include("controller/output.php");
   }

   $Bt_utilizationorder="editor";
   include('layout/header.php'); 
   include('layout/editorinfo.php');    
   include('layout/footer.php'); 
?>