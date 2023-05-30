<?php

$conn= mysqli_connect('127.0.0.1','root','root','win');
if(!$conn)
{
    echo 'erorr' . mysqli_connect_error();
}
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
if(isset($_POST['submit']))
{
    $sql="  INSERT into user(firstname,lastname,email)values ('$firstname','$lastname'.'$email')";
    msqli_query($conn,$sql);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
 <input type="text" name="firstname" id="firstname">
 <input type="text" name="lastname" id="lastname">
 <input type="text" name="email" id="email">
 <input type="submit" name="send" value="send">
</form>
</body>
</html>