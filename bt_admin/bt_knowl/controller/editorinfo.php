<?php

   //read
   if(isset($_GET['id'])){
   $id=$_GET['id'];
   $stmt = $db->prepare('SELECT * FROM `btknowl` WHERE `id` = :id');
   $stmt->execute(array(':id'=> $id));
   $rows = $stmt->fetchAll();
   }
   
   //delete
   if(isset($_POST['delete'])){
      $id=$_GET['id'];
      $stmt = $db->prepare('DELETE FROM btknowl WHERE id=:id');
      $stmt->execute(array(':id' => $id));
      header("Location:home");
   }

   //update
   if(isset($_POST['submit'])){
         $id=$_GET['id'];
         $bt_knowledgepass=$_POST['bt_knowledgepass'];
         $bt_knowledgename=$_POST['bt_knowledgename'];

      $stmt = $db->prepare('UPDATE btknowl SET `bt_knowledgepass` = :bt_knowledgepass, `bt_knowledgename` = :bt_knowledgename WHERE `id` = :id');
      $stmt->execute(array(
         ':id'=>$id,
         ':bt_knowledgepass' => $bt_knowledgepass,
         ':bt_knowledgename' => $bt_knowledgename
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