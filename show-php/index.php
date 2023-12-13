<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>ทดรองแสดงข้อมูลแนวปฏิบัติที่ดี</title>
        <!-- Bootstra CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

        <!-- Custom styling -->
        <link rel="stylesheet" href="main.css">
</head>
<body>
        
<div class="container">
        <div class="row">
                <div class="col-md-8 col-md-offset-2 post-div">

                        <!-- Display a list of posts from database -->
                        <?php if (isset($posts)): ?>
                                <?php foreach ($posts as $post): ?>
                                        <div class="post">
                                                <h3>
                                                <a href="details.php?id=<?php echo $post['id'] ?>"><?php echo $post['bt_utilizaname'] ?></a>
                                                </h3>
                                                <p><?php echo $post['bt_academic']; ?></p>
                                        </div>
                                <?php endforeach ?>
                        <?php else: ?>
                                <h2>No posts available</h2>
                        <?php endif ?>

                        
<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- CKEditor -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>

<!-- custom scripts -->
<script src="scripts.js"></script>

</body>
</html>