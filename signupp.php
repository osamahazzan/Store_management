<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
    <link rel="stylesheet" href="logins.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body >


<form action="signup.php" method="POST" style-="background-color:rgba(25, 79, 216, 0.048);"> 
<h2 style="margin-left=50px">Sign Up</h2>
<label for="username">Username:</label>

<input type="text" id ="username" name="username" required><br><br><br>

<label for="password">Password:</label> <input type="password" id="password" name="password"

required><br><br><br>
<label style=" margin-left=30px" for="username">email:</label>

<input  type="email" id ="email" name="email" required><br><br>

<input type="submit" value="Sign Up">

</form>
</body> </html>