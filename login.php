
 <!-- <?php  
require_once "logincon.php"
if(isset("Login"))
{
	$namee=$_POST["username"];
	$pass=$_POST["password"];
	$stat=$conn->prepare("SELECT namee, pass FROM login WHERE namee =? and pass=? ");
	$stat->exec(array($nemee,$pass));
	$cont=$

} ?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
    <link rel="stylesheet" href="login.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


	<form method="post" action="login2.php">
    <h1>Login Page</h1>
    <?php if(isset($_GET['error'])){?> 
        <p class="error"><?php echo $_GET['error'];}?></p>

		<label for="username">Username:</label>
		<input type="text" id="username" name="username" ><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" ><br><br>
		<input type="submit" value="Login">
		<a href="projectphp//newcounts"> create new counts </a>
	</form>
</body>
</html>