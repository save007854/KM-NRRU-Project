<?php

   //read
   if(isset($_GET['id'])){
   $id=$_GET['id'];
   $stmt = $db->prepare('SELECT * FROM `btpracticem` WHERE `id` = :id');
   $stmt->execute(array(':id'=> $id));
   $rows = $stmt->fetchAll();
   }
   
   //delete
   if(isset($_POST['delete'])){
      $id=$_GET['id'];
      $stmt = $db->prepare('DELETE FROM btpracticem WHERE id=:id');
      $stmt->execute(array(':id' => $id));
      header("Location:home");
   }

   //update
   if(isset($_POST['submit'])){
         $id=$_GET['id'];
         $bt_years=$_POST['bt_years'];
         $bt_cabtacts=$_POST['bt_cabtacts'];
         $bt_bookpractice=$_POST['bt_bookpractice'];
         $bt_knowledge=$_POST['bt_knowledge'];

      $stmt = $db->prepare('UPDATE btpracticem SET `bt_years` = :bt_years, `bt_cabtacts` = :bt_cabtacts, `bt_bookpractice` = :bt_bookpractice,
       `bt_knowledge` = :bt_knowledge WHERE `id` = :id');
      $stmt->execute(array(
         ':id'=>$id,
         ':bt_years' => $bt_years,
         ':bt_cabtacts' => $bt_cabtacts,
         ':bt_bookpractice' => $bt_bookpractice,
         ':bt_knowledge' => $bt_knowledge
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