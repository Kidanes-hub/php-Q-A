<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

<h1>Register</h1>
<!-- <form action="/user/registerationHandler.php" method="post">
  <label for="email">Email</label> <br/>
  <input type="email" name="email">
  <br/> <br/>
  <label for="password">Password</label> <br/>
  <input type="password" name="password"> 
  <br/> <br/>
  <input type="submit" value="Log in">

</form> -->


<form action="/user/registerationHandler.php" method="post">
 <label for="fname"> First Name:</label> <br>
 <input type="text" name="fname">
 <br> <br>
 <label for="lname">last name:</label> <br>
 <input type="text" name="lname">
 <br> <br>
 <label for="email">Email</label> <br>
 <input type="email" name="email">
 <br><br>
 <label for="password">Choose Password:</label> <br>
 <input type="password" name="password" id="">
 <br> <br>
 <input type="submit" value="Register">
</form>


<a href="../" style="color: #2ecc71; text-decoration: none; font-weight: bold; padding: 5px 10px; border-radius: 5px; transition: background-color 0.3s ease;">Back to home page</a>
    
</body>
</html>