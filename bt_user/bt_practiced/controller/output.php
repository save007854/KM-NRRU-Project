<?php
    $id=$_GET['id'];
    $stmt = $db->prepare('SELECT * FROM btpracticed WHERE id=:id');
    $stmt->execute(array(':id' => $id));
    $rows = $stmt->fetchAll();

    //這個部分參考https://www.sourcecodester.com/tutorials/php/12412/php-export-html-text-ms-word.html
    if(!empty($rows[0]['bt_years']) && !empty($rows[0]['bt_titleth'] ) && !empty($rows[0]['bt_titleeng'] ) && !empty($rows[0]['bt_source'] ) && !empty($rows[0]['bt_objective'] ) && !empty($rows[0]['bt_targetgroup'] ) && !empty($rows[0]['bt_process'] ) 
    && !empty($rows[0]['bt_result'] ) && !empty($rows[0]['bt_factor'] ) && !empty($rows[0]['bt_tool'] ) && !empty($rows[0]['bt_refer'] ) && !empty($rows[0]['bt_author'] ) && !empty($rows[0]['bt_practicegroup'] ) 
    && !empty($rows[0]['bt_responsible'] ) && !empty($rows[0]['bt_contact'] ) ){	
        $output ="
            <h1>".$rows[0]['bt_years']."</h1><br>
            <div>".$rows[0]['bt_titleth']."</div>
            <div>".$rows[0]['bt_titleeng']."</div>
            <h1>".$rows[0]['bt_source']."</h1><br>
            <div>".$rows[0]['bt_objective']."</div>
            <div>".$rows[0]['bt_targetgroup']."</div>
            <h1>".$rows[0]['bt_process']."</h1><br>
            <div>".$rows[0]['bt_result']."</div>
            <div>".$rows[0]['bt_factor']."</div>
            <h1>".$rows[0]['bt_tool']."</h1><br>
            <div>".$rows[0]['bt_refer']."</div>
            <div>".$rows[0]['bt_author']."</div>
            <h1>".$rows[0]['bt_practicegroup']."</h1><br>
            <div>".$rows[0]['bt_responsible']."</div>
            <h1>".$rows[0]['bt_contact']."</h1><br>
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