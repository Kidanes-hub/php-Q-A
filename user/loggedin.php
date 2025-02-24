<?php
require_once('../helpers/init.php');

// Check if the user is already logged in via session
// session_start(); // Make sure the session is started

// // if ser logged in take user to the home pageu
// if (isset($_SESSION['uhash']) && !empty($_SESSION['uhash'])) {
//     // If the user is logged in, redirect them to the home page
//     header("Location: ../");
//     exit();
// }

print"<pre>";
print_r($_POST);
print_r($_SESSION);

// set info/value to be collected
$email = "";
$password = "";
$loggedInUser = array(); // make it global

// Grab values
if(isset($_POST['email'])) { // Fixed the typo 'emaile' to 'email'
    $email = $_POST['email'];
}
if(isset($_POST['password'])) {
    $password = $_POST['password'];
}

// Check if username and password are correct
if(!empty($email) && !empty($password)) {
    $loggedInUser = loginUser($email, $password);
}

if(empty($loggedInUser)) {
    echo "NOT Logged in";  
} else {
    print_r($loggedInUser); // returns all info of user
    
    $_SESSION['uhash'] = $loggedInUser['uHash']; // one way for the session, but not the best way
    
//     header("Location: /home.php");// Redirect the user to the home page after successful login
    
//     exit();

}
?>