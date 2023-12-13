<?php
    ob_start();
    session_start();
    try {
        //create PDO connection
        $db = new PDO("mysql:host=".MySQL::DBHOST.";charset=utf8mb4;dbname=".MySQL::DBNAME, MySQL::DBUSER, MySQL::DBPASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Suggested to comment on production websites
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    } catch(PDOException $e) {
        //show error
        echo '<p class="bg-danger">'.$e->getMessage().'</p>';
        exit;
    }
?>