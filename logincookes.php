<?php
$name="localhost";
$uname="root";
$password="";
$db="datalogin";
$conn=mysqli_connect($name,$uname,$password,$db);
if (!$conn) {
die("Database connection failed: " .
mysqli_connect_error());
}
?>