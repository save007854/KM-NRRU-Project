<?php 
        // connect to database
    $db = mysqli_connect("localhost", "root", "", "bestpractice");

        if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $result2 = mysqli_query($db, "SELECT * FROM btpracticed WHERE id=$id");
                $post = mysqli_fetch_assoc($result);
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>ทดรองแสดงข้อมูลแนวปฏิบัติที่ดี</title>

        <!-- Bootstra -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

        <!-- Custom styling -->
        <link rel="stylesheet" href="main.css">

</head>
<body>
        
        <div class="container">
                <div class="row">
                        <div class="col-md-8 col-md-offset-2 post-div">
                                <div class="post-details">
                                        <h2><?php echo $post['bt_titleth'] ?></h2>
                                        <p><?php echo html_entity_decode($post['bt_years']); ?></p>
                                        <p><?php echo html_entity_decode($post['bt_titleeng']); ?></p>
                                        <p><?php echo html_entity_decode($post['bt_source']); ?></p>
                                        <p><?php echo html_entity_decode($post['bt_objective']); ?></p>
                                        <p><?php echo html_entity_decode($post['bt_targetgroup']); ?></p>
                                        <p><?php echo html_entity_decode($post['bt_process']); ?></p>
                                        <p><?php echo html_entity_decode($post['bt_result']); ?></p>
                                        <p><?php echo html_entity_decode($post['bt_factor']); ?></p>
                                        <p><?php echo html_entity_decode($post['bt_tool']); ?></p>
                                        <p><?php echo html_entity_decode($post['bt_refer']); ?></p>
                                        <p><?php echo html_entity_decode($post['bt_author']); ?></p>
                                        <p><?php echo html_entity_decode($post['bt_practicegroup']); ?></p>
                                        <p><?php echo html_entity_decode($post['bt_responsible']); ?></p>
                                        <p><?php echo html_entity_decode($post['bt_contact']); ?></p>
                                        <h2><a href="http://localhost/Project/webproject/WebTest/">กลับหน้าแรก</a></h2>
                                </div>                            
                        </div>
                        
                </div>
        </div>



<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- JQuery scripts -->
<script>

</script>

</body>
</html>