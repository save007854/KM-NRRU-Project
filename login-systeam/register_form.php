<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $bt_userid = mysqli_real_escape_string($conn, $_POST['bt_userid']);
   $bt_email = mysqli_real_escape_string($conn, $_POST['bt_email']);
   $bt_password = md5($_POST['bt_password']);
   $bt_username = md5($_POST['bt_username']);
   $bt_status = $_POST['bt_status'];

   $select = " SELECT * FROM btemployee WHERE bt_email = '$bt_email' && bt_password = '$bt_password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass){
         
      }else{
         $insert = "INSERT INTO btemployee(bt_userid, bt_email, bt_password, bt_username, bt_status) VALUES('$bt_userid','$bt_email','$bt_password','$bt_username','$bt_status')";
         mysqli_query($conn, $insert);
         header('location:index.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>KM-หน้าเพิ่มพนักงาน</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="bt_userid" required placeholder="enter your userid">
      <input type="email" name="bt_email" required placeholder="enter your email">
      <input type="password" name="bt_password" required placeholder="enter your password">
      <input type="text" name="bt_username" required placeholder="enter your username">

      <select name="bt_status">
         <option value="user">user</option>
      </select>
      <input type="submit" name="submit" value="เพิ่มพนักงาน" class="form-btn">
      <p>คุณมีรหัสแล้วใช่ไหม? <a href="index.php">คลิ๊กเพื่อเข้าสู่ระบบ</a></p>
   </form>

</div>

</body>
</html>