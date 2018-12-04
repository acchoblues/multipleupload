<?php
// Database configuration
// $dbHost     = "localhost";
// $dbUsername = "root";
// $dbPassword = "";
// $dbName     = "www.hakkoblogs.com";

// Create database connection
// $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
// if ($db->connect_error) {
//    die("Connection failed: " . $db->connect_error);
// }

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$_FILES['file']['name'])) {
   $status = 1;
   //$insert = $db->query("INSERT INTO files (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
    
}