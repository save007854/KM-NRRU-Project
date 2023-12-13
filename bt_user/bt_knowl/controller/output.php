<?php
    $id=$_GET['id'];
    $stmt = $db->prepare('SELECT * FROM btknowl WHERE id=:id');
    $stmt->execute(array(':id' => $id));
    $rows = $stmt->fetchAll();

    //這個部分參考https://www.sourcecodester.com/tutorials/php/12412/php-export-html-text-ms-word.html
    if(!empty($rows[0]['bt_knowledgepass']) && !empty($rows[0]['bt_knowledgename'] ) ){	
        $output ="
            <h1>".$rows[0]['bt_knowledgepass']."</h1><br>
            <div>".$rows[0]['bt_knowledgename']."</div>
             ";

        header("Content-Type: application/vnd.msword");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("content-disposition: attachment;filename=".$rows[0]['bt_groupname'].".doc");

        echo "<html>";
        echo $output;
        echo "</html>";

    }else{
        echo "<script>alert('Please complete the required field!')</script>";
        echo "<script>window.location='index.php'</script>";
    }
    //
?>