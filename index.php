<?php

require_once('helpers/init.php'); // import init.php

// $_SESSION['test'] = 'example';
// print"<pre>";
// print_r($_POST);
// print_r($_SESSION);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="./CSS/style.css"> -->
</head>

<body>
    <h1>Home Page</h1>

    <?php 
    if(isset($_SESSION['uhash'])) : ?>
    <h2>Visible only when logged in</h2>
    <?php endif; ?>

    <?php 
    if(!isset($_SESSION['uhash'])) : ?>
    <h2>Visible only when logged out</h2>
    <?php endif; ?>




    <a href="../user/register.php" class="custom-link">Register</a>
    <br> <br>
    <a href="../user/login.php" class="custom-link">Log In</a>
    <br> <br>
    <a href="../addTopic" class="custom-link">Add Topic</a>
    <br> <br>
    <a href="../discussions" class="custom-link">Questions Asked</a>
    <br> <br>
    <a href="../ask" class="custom-link">Ask Your Question</a>



</body>

</html>