<?php

   //create
   if(isset($_POST['submit'])){
      $bt_years = $_POST['bt_years'];
      $bt_cabtacts = $_POST['bt_cabtacts'];
      $bt_bookpractice = $_POST['bt_bookpractice'];
      $bt_knowledge = $_POST['bt_knowledge'];

      if($bt_cabtacts != ''){
         $stmt = $db->prepare('INSERT INTO btpracticem (bt_years,bt_cabtacts,bt_bookpractice,bt_knowledge) 
         VALUES (:bt_years,:bt_cabtacts,:bt_bookpractice,:bt_knowledge)');
         $stmt->execute(array(
            ':bt_years' => $bt_years,
            ':bt_cabtacts' => $bt_cabtacts,
            ':bt_bookpractice' => $bt_bookpractice,
            ':bt_knowledge' => $bt_knowledge
         ));
         $id=$db->lastInsertId('id');
         header("Location:editorinfo?id=".$id);
      }else{
         echo "error !";
      }
   }

   $bt_years="editor";
   include('layout/header.php');
   include('layout/editor.php');
   include('layout/footer.php');
?>