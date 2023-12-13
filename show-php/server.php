<?php 
        // connect to database
        $db = mysqli_connect("localhost", "root", "", "bestpractice");

        // retrieve posts from database
        $result = mysqli_query($db, "SELECT * FROM btutilization");
        $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if (isset($_POST['uploading_file'])) {
            // Get image name
            $image = $_FILES['post_image']['name'];
    
            // image file directory
            $target = "images/" . basename($image);
    
            if (move_uploaded_file($_FILES['post_image']['tmp_name'], $target)) {
                    echo "http://localhost/Project/webproject/show-php/" . $target;
                    exit();
            }else{
                    echo "Failed to upload image";
                    exit();
            }
    }
    if (isset($_POST['save-post'])) {

        $title = mysqli_real_escape_string($db, $_POST['bt_utilizaname']);
        $body = htmlentities(mysqli_real_escape_string($db, $_POST['bt_academic']));
        $body = htmlentities(mysqli_real_escape_string($db, $_POST['bt_public']));
        $body = htmlentities(mysqli_real_escape_string($db, $_POST['bt_policy']));
        $body = htmlentities(mysqli_real_escape_string($db, $_POST['bt_commercial']));

        $sql = "INSERT INTO posts (bt_utilizaname, bt_academic, bt_public, bt_policy, bt_commercial) VALUES ('$bt_utilizaname', '$bt_academic', '$bt_public', '$bt_policy', '$bt_commercial')";
        mysqli_query($db, $sql);
        header("location: index.php");
}
?>