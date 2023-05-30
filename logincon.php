<?php
$name="localhost";
$uname="root";
$password="";
$db="datalogin";
$conn=mysqli_connect($name,$uname,$password,$db);
if(!$conn){
    echo "faild conniction";
}
else{
    header("loction:login.php");
}