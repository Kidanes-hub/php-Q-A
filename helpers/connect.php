<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]); // helps find project root folder when moving from server to server 
// create connection with database 
// require_once("./config.php"); // Replaced by the path below
require_once($root."/config.php");
// echo $_SERVER["DOCUMENT_ROOT"];


// Connect to SQL Server 
$sqlConnect = mysqli_connect($sql_db_host, $sql_db_user, $sql_db_pass, $sql_db_name);

if($sqlConnect) {
    // echo "Connected!!";
} else {
    echo "Not Connected";
}