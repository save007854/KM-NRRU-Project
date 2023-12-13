<?php
/**NOTE 8/15/16
  *this is just a basic functionality for uploading a file to a directory
  * this lacks validation if filename is already existing
  * no rename/delete functionality
  * no per user upload 
//

/* GLOBAL */
include 'functions.php';
define('KB', 1024);
define('MB', 1048576);
define('GB', 1073741824);
define('TB', 1099511627776);

if (isset($_POST["submit"]) && !empty($_FILES["thisFile"]["name"])) { //check if file is set and its not empty
 
  
  /*********** SETTERS ***********/
  /**GET NAME **/
  $filename = strtolower($_FILES["thisFile"]["name"]); //get name of file and convert to lowercase
  
  /** GET SIZE **/
  $bytes = $_FILES["thisFile"]["size"]; //get file size 
  $filesize = formatSizeUnits($bytes); //convert filesize to MB/KB/ETC

  /** GET FILE TYPE **/
  $filetype = $_FILES["thisFile"]["type"];
  
  /** GET FILE EXTENSION **/
  $file_ext = strtolower(end(explode('.',$_FILES['thisFile']['name']))); //gets extension if PDF, JPEG, PNG, ETC.
  $file_temp = $_FILES['thisFile']['tmp_name']; //get temporary name


  /*********** CONDITIONS ***********/
  
  //** ALLOWED EXTENSIONS**//
  $errors= array();
  $allowed_ext = array("jpeg", "jpg", "png", "pdf", "txt");

  //** CHECK EXTENSION OF FILE. ONLY ALLOW ABOVE EXTENSIONS**/
  if(in_array($file_ext, $allowed_ext) == false) {
   $errors[] ="extension not allowed";
 
  }
   /*******************************/

  //** CHECK IF FILE SIZE IS ABOVE 2MB if yes, then die();
  if ($bytes > 10*MB) {
   die("file too large");
  } 
   /*******************************/

  //** UPLOAD FILE **/
  //** if array $errors is empty then upload, else error**/
  if(empty($errors)==true){

         move_uploaded_file($file_temp,"../uploads/file/".$filename); //upload file to directory

         $linkPath = "../uploads/file/".$filename; //create path to "uploads/file/filename"
         insertPath($linkPath, $filename); //insert path and filename to this function. this function saves to DB the link and filename
         
         echo $linkPath." Success"."<br />";
  }else{
         print_r($errors)."<br />";
   }
 /*******************************/







  echo $filename."<br />"; //echo filename
  echo $filesize."<br />"; //echo filesize
  echo $filetype."<br />"; //echo filesize
  echo $file_ext ."<br />"; //echo extensions



  } 

  else {
  echo "filename empty";
  }

?>

<a href="http://localhost/Project/webproject/bt_admin/php_uploadfile-master/index.php">หน้าแรก</a>