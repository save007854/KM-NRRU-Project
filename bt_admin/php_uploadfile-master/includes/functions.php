<?php
$thisPage= $_SERVER['REQUEST_URI'];

/* CONNECT TO DB PDO */
function PDOconn() {
 $user = "root";
 $pass = "";
 $db = new PDO('mysql:host=localhost;dbname=zild_db', $user, $pass);
 return $db;
}


/* GET USERS */
function getFiles() {
 $db = PDOconn();
 $query = "SELECT * FROM upload_file";
 $sql = $db->prepare($query);
 $sql->execute();
 $row = $sql->fetchALL();
 return $row;
}

/* CONVERT FILE UPLOAD SIZE (upload_file.php) */
function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' kB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
}


/* RECORD UPLOADED FILE PATH and FILENAME */
function insertPath($linkPath, $filename) {
 $db = PDOconn();
 $statement = $db->prepare("INSERT INTO upload_file (id, owner, filename, path) VALUES (?, ?, ?, ?)");
 $statement->execute(array(NULL, '', $filename, "$linkPath"));
}

?>