<?php
    $id=$_GET['id'];
    $stmt = $db->prepare('SELECT * FROM btutilization WHERE id=:id');
    $stmt->execute(array(':id' => $id));
    $rows = $stmt->fetchAll();

    //這個部分參考https://www.sourcecodester.com/tutorials/php/12412/php-export-html-text-ms-word.html
    if(!empty($rows[0]['bt_utilizationorder']) && !empty($rows[0]['bt_years'] ) && !empty($rows[0]['bt_utilizaname'] ) && !empty($rows[0]['bt_academic'] ) && !empty($rows[0]['bt_public'] ) 
    && !empty($rows[0]['bt_policy'] ) && !empty($rows[0]['bt_commercial'] ) ){	
        $output ="
            <h1>".$rows[0]['bt_utilizationorder']."</h1><br>
            <div>".$rows[0]['bt_years']."</div>
            <div>".$rows[0]['bt_utilizaname']."</div>
            <h1>".$rows[0]['bt_academic']."</h1><br>
            <div>".$rows[0]['bt_public']."</div>
            <div>".$rows[0]['bt_policy']."</div>
            <h1>".$rows[0]['bt_commercial']."</h1><br>
        ";

        header("Content-Type: application/vnd.msword");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("content-disposition: attachment;filename=".$rows[0]['bt_years'].".doc");

        echo "<html>";
        echo $output;
        echo "</html>";

    }else{
        echo "<script>alert('Please complete the required field!')</script>";
        echo "<script>window.location='index.php'</script>";
    }
    //
?>