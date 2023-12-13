<?php
   $stmt = $db->prepare('SELECT * FROM `btknowl`');
   $stmt->execute();
   $rows = $stmt->fetchAll();

   $Bt_utilizationorder="home";
   include('layout/header.php'); 
   include('layout/home.php');    
   include('layout/footer.php'); 
?>