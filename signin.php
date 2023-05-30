<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
    <link rel="stylesheet" href="login.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
<form action="signinn.php" method="POST">
<h2 style="margin-left= 50px"> Login</h2>

<label for="username">Username:</label>
<input type="text" id="username" name="username"
required><br><br>
<label for="password">Password:</label>
<input type="password" id="password" name="password"
required><br><br>
<input type="submit" value="Login">


</form>


</body>
</html>