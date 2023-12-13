<?php
   $stmt = $db->prepare('SELECT * FROM `btutilization`');
   $stmt->execute();
   $rows = $stmt->fetchAll();

   $Bt_utilizationorder="home";
   include('layout/header.php'); 
   include('layout/home.php');    
   include('layout/footer.php');
?>