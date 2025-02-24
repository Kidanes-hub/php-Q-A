<?php
require_once('../../helpers/init.php');

// // A place to handele the question from submission
// print '<pre>';
// print_r($_POST);
// print_r($_SESSION);


$uid = 0; // Get this from session
$tid = 0; 
$question = "";
$explanation = "";
$userHash = "";
$userInfo = array();

// Grab values 
if (isset($_SESSION['uhash'])) {
    $userHash = $_SESSION['uhash'];
    $userInfo = getUserInfoFromHash($userHash);
    if (!empty($userInfo)) {
        print_r($userInfo);
        if (isset($userInfo['uid'])) {
            $uid = $userInfo['uid'];
        }
    }
}

if (isset($_POST['topic'])) {
    $tid = $_POST['topic'];
}

if (isset($_POST['explanation'])) {
    $explanation = $_POST['explanation'];
}

if (isset($_POST['question'])) {
    $question = $_POST['question'];  // You need to define this variable
}

// Add question to DB
if ($uid != 0 && $tid != 0 && !empty($question)) {
    echo "HERE";
    addQuestion($uid, $tid, $question, $explanation);
} 

?>


<a href="../"
    style="color: #2ecc71; text-decoration: none; font-weight: bold; padding: 5px 10px; border-radius: 5px; transition: background-color 0.3s ease;">Back
    to home page</a>