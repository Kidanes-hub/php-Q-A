<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add topic</title>
</head>

<body>

    <h1>Add Topic</h1>
    <form action="/addTopic/added.php" method="POST">
        <label for="topicName">Topic name</label><br>
        <input type="text" name="topicName" id="topicName" /><br /><br />
        <input type="submit" value="Add topic" />
    </form>

    <br>

    <a href="../"
        style="color: #2ecc71; text-decoration: none; font-size: 28px; font-weight: bold; padding: 5px 10px; border-radius: 5px; transition: background-color 0.3s ease; ">Back
        to home page</a>
</body>

</html>