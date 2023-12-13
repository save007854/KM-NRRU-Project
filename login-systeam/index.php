<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

   $bt_userid = mysqli_real_escape_string($conn, $_POST['bt_userid']);
   $bt_email = mysqli_real_escape_string($conn, $_POST['bt_email']);
   $bt_password = md5($_POST['bt_password']);
   $bt_username = md5($_POST['bt_username']);
   $bt_status = $_POST['bt_status'];

   $select = " SELECT * FROM btemployee WHERE bt_email = '$bt_email' && bt_password = '$bt_password' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_array($result);

      if ($row['bt_status'] == 'admin') {

         $_SESSION['admin_name'] = $row['bt_userid'];
         header('location:admin_page.php');
      } elseif ($row['bt_status'] == 'user') {

         $_SESSION['user_name'] = $row['bt_userid'];
         header('location:user_page.php');
      }
   } else {
      $error[] = 'Email หรือ รหัสผ่านของท่านผิด';
   }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login KM-Nrru</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link href="assets/img/nrru-logo.png" rel="icon">


</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3>เข้าสู่ระบบ</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="email" name="bt_email" required placeholder="enter your email">
         <input type="password" name="bt_password" required placeholder="enter your password">
         <input type="submit" name="submit" value="เข้าสู่ระบบ" class="form-btn">
         <p>-----------------------------------------</a></p>
         <p><a href="http://localhost/Project/webproject/WebTest/">เข้าเว็บหลัก</a></p>
      </form>

   </div>

</body>

</html>