<?php
   $stmt = $db->prepare('SELECT * FROM `btpracticed`');
   $stmt->execute();
   $rows = $stmt->fetchAll();

   $bt_years="home";
   include('layout/header.php'); 
   include('layout/home.php');    
   include('layout/footer.php'); 
?>