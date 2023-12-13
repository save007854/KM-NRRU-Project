<?php
    $id=$_GET['id'];
    $stmt = $db->prepare('SELECT * FROM btpracticed WHERE id=:id');
    $stmt->execute(array(':id' => $id));
    $rows = $stmt->fetchAll();

    //https://www.sourcecodester.com/tutorials/php/12412/php-export-html-text-ms-word.html
    if(!empty($rows[0]['bt_years']) && !empty($rows[0]['bt_titleth'] ) && !empty($rows[0]['bt_titleeng'] ) && !empty($rows[0]['bt_source'] ) && !empty($rows[0]['bt_objective'] ) && !empty($rows[0]['bt_targetgroup'] ) && !empty($rows[0]['bt_process'] ) 
    && !empty($rows[0]['bt_result'] ) && !empty($rows[0]['bt_factor'] ) && !empty($rows[0]['bt_tool'] ) && !empty($rows[0]['bt_refer'] ) && !empty($rows[0]['bt_author'] ) && !empty($rows[0]['bt_practicegroup'] ) 
    && !empty($rows[0]['bt_responsible'] ) && !empty($rows[0]['bt_contact'] ) ){	
        // หน้าออกไปหน้า word หรือ pdf
        $output =" 
            <center><h1>test</h1></center><br>
            <h1>".$rows[0]['bt_years']."</h1>
            <div>".$rows[0]['bt_titleth']."</div>
            <div>".$rows[0]['bt_titleeng']."</div>
            <div>".$rows[0]['bt_source']."</div>
            <div>".$rows[0]['bt_objective']."</div>
            <div>".$rows[0]['bt_targetgroup']."</div>
            <div>".$rows[0]['bt_process']."</div>
            <div>".$rows[0]['bt_result']."</div>
            <div>".$rows[0]['bt_factor']."</div>
            <div>".$rows[0]['bt_tool']."</div>
            <div>".$rows[0]['bt_refer']."</div>
            <div>".$rows[0]['bt_author']."</div>
            <div>".$rows[0]['bt_practicegroup']."</div>
            <div>".$rows[0]['bt_responsible']."</div>
            <div>".$rows[0]['bt_contact']."</div>
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