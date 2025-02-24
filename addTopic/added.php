<?php
require_once('../helpers/init.php');

print "<pre>";  // Added space for readability
print_r($_POST);  // Can be removed if not needed for debugging

$topicName = ''; 

// Grab Values from Post 
if (isset($_POST['topicName'])) {
    $topicName = $_POST['topicName'];
}

// Add topic 
if (!empty($topicName)) {
    $result = addTopic($topicName);
    if ($result) {
        echo "Topic successfully added!";
    } else {
        echo "Failed to add topic.";
    }
} else {
    echo "Topic name is required.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> <a href="../"
            style="color: #2ecc71; text-decoration: none; font-weight: bold; padding: 5px 10px; border-radius: 5px; transition: background-color 0.3s ease;">Back
            to home page</a></h1>
</body>

</html>