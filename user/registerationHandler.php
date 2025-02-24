<?php
require_once('../helpers/init.php');

// print"<pre>";
// print_r($_POST);
// abebe();

// Set use info/value to be collected
$fname = "";
$lname = "";
$email = "";
$password = "";

// Grab values 
if(isset($_POST['fname'])) {
    $fname = $_POST['fname'];
}
if(isset($_POST['lname'])) { 
    $lname = $_POST['lname'];
}
if(isset($_POST['email'])) { 
    $email = $_POST['email'];
}
if(isset($_POST['password'])) {
    $password = $_POST['password'];
}

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    registerUser($fname, $lname, $email, $password);
} else {
    echo "Please fill in all fields.";
}

?>
