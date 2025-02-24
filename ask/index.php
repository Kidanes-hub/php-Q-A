<?php
require_once('../helpers/init.php');

$topics = getTopics();

// // Uncomment for debugging
// print '<pre>';
// print_r($topics);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask</title>
</head>

<body>

    <h1>Ask your questions</h1>
    <form action="/ask/recieved/index.php" method="POST">
        <label for="question">Your question:</label><br>
        <input type="text" name="question" required>
        <br> <br>
        <textarea name="explanation" cols="30" rows="10" required></textarea>
        <br> <br>

        <label for="topic">Select Topic:</label><br>
        <select name="topic" id="topic" required>
            <option value="" disabled selected>Select a topic</option> <!-- Default prompt option -->

            <?php 
        // Loop through topics and create option elements
        foreach($topics as $key => $value) {
            echo '<option value="' . $value['tid'] . '">' . $value['topicName'] . '</option>';
        }
        ?>
        </select>
        <br> <br>
        <input type="submit" value="Ask">
    </form>
    <br>


    <a href="../"
        style="color: #2ecc71; text-decoration: none; font-weight: bold; padding: 5px 10px; border-radius: 5px; transition: background-color 0.3s ease; ">Back
        to home page</a>
</body>

</html>