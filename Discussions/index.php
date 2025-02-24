<?php
require_once('../helpers/init.php');

// A place to handle the question from submission

// print "<pre>";
// print_r($_SESSION);


$tenQuestions = getQuestions(10);

// print_r($tenQuestions);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussions</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <h1>Questions Asked</h1>
    <div>
        <?php
foreach($tenQuestions as $key => $value) {
    $question = $value['question'];
    $explanation = $value['explanation'];
    $askedDate = $value['askedDate'];

// print "<div class='questionWrapper'>
//             <div class='qtitle'>".$question."</div>
//             <div class='explanation'>".$explanation."</div>
//             <div class='qdate'>".$askedDate."</div>
//         </div>";

print "<div class='questionWrapper'>"; 
print "<div class='qtitle'>".$question."</div>";
print "<div class='explanation'>".$explanation."</div>";
print "<div class='qdate'>".$askedDate."</div>"; 
print "</div>";


}

?>


    </div>

    <a href="../"
        style="color: #2ecc71; text-decoration: none; font-weight: bold; padding: 5px 10px; border-radius: 5px; transition: background-color 0.3s ease; ">Back
        to home page</a>

</body>

</html>