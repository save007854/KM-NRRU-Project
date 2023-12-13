<?php

   //read
   if(isset($_GET['id'])){
   $id=$_GET['id'];
   $stmt = $db->prepare('SELECT * FROM `btpracticed` WHERE `id` = :id');
   $stmt->execute(array(':id'=> $id));
   $rows = $stmt->fetchAll();
   }
   
   //delete
   if(isset($_POST['delete'])){
      $id=$_GET['id'];
      $stmt = $db->prepare('DELETE FROM btpracticed WHERE id=:id');
      $stmt->execute(array(':id' => $id));
      header("Location:home");
   }

   //update
   if(isset($_POST['submit'])){
         $id=$_GET['id'];
         $bt_years=$_POST['bt_years'];
         $bt_titleth=$_POST['bt_titleth'];
         $bt_titleeng=$_POST['bt_titleeng'];
         $bt_source=$_POST['bt_source'];
         $bt_objective=$_POST['bt_objective'];
         $bt_targetgroup=$_POST['bt_targetgroup'];
         $bt_process=$_POST['bt_process'];
         $bt_factor=$_POST['bt_factor'];
         $bt_tool=$_POST['bt_tool'];
         $bt_refer=$_POST['bt_refer'];
         $bt_author=$_POST['bt_author'];
         $bt_practicegroup=$_POST['bt_practicegroup'];
         $bt_responsible=$_POST['bt_responsible'];
         $bt_contact=$_POST['bt_contact'];
      $stmt = $db->prepare('UPDATE btpracticed SET `bt_years` = :bt_years, `bt_titleth` = :bt_titleth, `bt_titleeng` = :bt_titleeng, `bt_source` = :bt_source, `bt_objective` = :bt_objective, `bt_targetgroup` = :bt_targetgroup, `bt_process` = :bt_process
      , `bt_factor` = :bt_factor, `bt_tool` = :bt_tool, `bt_refer` = :bt_refer, `bt_author` = :bt_author, `bt_practicegroup` = :bt_practicegroup, `bt_responsible` = :bt_responsible, `bt_contact` = :bt_contact WHERE `id` = :id');
      $stmt->execute(array(
         ':id'=>$id,
         ':bt_years' => $bt_years,
         ':bt_titleth' => $bt_titleth,
         ':bt_titleeng' => $bt_titleeng,
         ':bt_source' => $bt_source,
         ':bt_objective' => $bt_objective,
         ':bt_targetgroup' => $bt_targetgroup,
         ':bt_process' => $bt_process,
         ':bt_factor' => $bt_factor,
         ':bt_tool' => $bt_tool,
         ':bt_refer' => $bt_refer,
         ':bt_author' => $bt_author,
         ':bt_practicegroup' => $bt_practicegroup,
         ':bt_responsible' => $bt_responsible,
         ':bt_contact' => $bt_contact
      ));
      header("Location:editorinfo?id=".$id);
   }

   if(isset($_POST['output'])){
      include("controller/output.php");
   }

   $bt_years="editor";
   include('layout/header.php'); 
   include('layout/editorinfo.php');    
   include('layout/footer.php'); 
?>