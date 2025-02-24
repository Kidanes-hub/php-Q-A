<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>

<body>
    <h1>Log in</h1>

    <form action="/user/loggedin.php" method="post">
        <label for="email">Email:</label> <br>
        <input type="email" name="email" id="">
        <br> <br>
        <label for="password">Password:</label> <br>
        <input type="password" name="password" id="">
        <br> <br>
        <input type="submit" value="Log in" id="">

    </form>

    <br>

    <a href="../"
        style="color:rgb(16, 228, 105); text-decoration: none; font-size: 28px; font-weight: bold; padding: 5px 10px; border-radius: 5px; transition: background-color 0.3s ease;">Back
        to home page</a>

</body>

</html>