<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
require_once($root."/config.php");

// Connect to MySQL 
$con = mysqli_connect($sql_db_host, $sql_db_user, $sql_db_pass, $sql_db_name);

// Check if connected
// Uncomment this line to debug connection
// if($con) { 
//     echo "connected ----"; 
// }

// Query file 
$queryfile = 'dbQuery.sql';
// Temporary variable, used to store current query
$templine = '';
// Check if the file exists
if (!file_exists($queryfile)) {
    die("Query file does not exist.");
}
// Read in entire file
$lines = file($queryfile);

// Loop through each line
foreach ($lines as $line) {
    // Skip it if it's a comment or an empty line
    if (substr($line, 0, 2) == '--' || $line == '') {
        continue;
    }
    // Add this line to the current query segment
    $templine .= $line;
    $query = false;
    // If it has a semicolon at the end, it's the end of the query
    if (substr(trim($line), -1, 1) == ';') {
        // Perform the query
        $query = mysqli_query($con, $templine);
        // Check for errors
        if (!$query) {
            echo "Error executing query: " . mysqli_error($con) . "\n";
        }
        // Reset temp variable to empty
        $templine = '';
    }
}

echo "done";
?>
