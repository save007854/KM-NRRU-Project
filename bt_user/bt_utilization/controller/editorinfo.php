<?php

   //read
   if(isset($_GET['id'])){
   $id=$_GET['id'];
   $stmt = $db->prepare('SELECT * FROM `btutilization` WHERE `id` = :id');
   $stmt->execute(array(':id'=> $id));
   $rows = $stmt->fetchAll();
   }
   
   //delete
   if(isset($_POST['delete'])){
      $id=$_GET['id'];
      $stmt = $db->prepare('DELETE FROM btutilization WHERE id=:id');
      $stmt->execute(array(':id' => $id));
      header("Location:home");
   }

   //update
   if(isset($_POST['submit'])){
         $id=$_GET['id'];
         $bt_utilizationorder=$_POST['bt_utilizationorder'];
         $bt_years=$_POST['bt_years'];
         $bt_utilizaname=$_POST['bt_utilizaname'];
         $bt_academic=$_POST['bt_academic'];
         $bt_public=$_POST['bt_public'];
         $bt_policy=$_POST['bt_policy'];
         $bt_commercial=$_POST['bt_commercial'];

      $stmt = $db->prepare('UPDATE btutilization SET `bt_utilizationorder` = :bt_utilizationorder, `bt_years` = :bt_years, `bt_utilizaname` = :bt_utilizaname, `bt_academic` = :bt_academic, `bt_public` = :bt_public, `bt_policy` = :bt_policy, `bt_commercial` = :bt_commercial WHERE `id` = :id');
      $stmt->execute(array(
         ':id'=>$id,
         ':bt_utilizationorder' => $bt_utilizationorder,
         ':bt_years' => $bt_years,
         ':bt_utilizaname' => $bt_utilizaname,
         ':bt_academic' => $bt_academic,
         ':bt_public' => $bt_public,
         ':bt_policy' => $bt_policy,
         ':bt_commercial' => $bt_commercial
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