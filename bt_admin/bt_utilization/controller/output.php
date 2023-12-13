<?php
    $id=$_GET['id'];
    $stmt = $db->prepare('SELECT * FROM btutilization WHERE id=:id');
    $stmt->execute(array(':id' => $id));
    $rows = $stmt->fetchAll();

    //https://www.sourcecodester.com/tutorials/php/12412/php-export-html-text-ms-word.html
    if(!empty($rows[0]['bt_utilizationorder']) && !empty($rows[0]['bt_years'] ) && !empty($rows[0]['bt_utilizaname'] ) && !empty($rows[0]['bt_academic'] ) 
    && !empty($rows[0]['bt_public'] ) && !empty($rows[0]['bt_policy'] ) && !empty($rows[0]['bt_commercial'] ) ){	
        $output ="
            <h2><center>แบบฟอร์มการนำผลงานวิจัย หรืองานสร้างสรรค์ไปใช้ประโยชน์</center></h2>
            <h3>".$rows[0]['bt_utilizationorder']."</h3><br>
            <h4><div>".$rows[0]['bt_years']."</div>
            <p>งานวิจัย หรือ งานสร้างสรรค์ เรื่อง<div>".$rows[0]['bt_utilizaname']."</div> </p>
            <div>".$rows[0]['bt_academic']."</div>
            <div>".$rows[0]['bt_public']."</div>
            <div>".$rows[0]['bt_policy']."</div>
            <div>".$rows[0]['bt_commercial']."</div></h4>
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
    
?>