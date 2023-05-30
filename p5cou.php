<?php 
if(isset ($_POST ['submit'])){
    $name=$_POST['namea'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];

$conn=mysqli_connect('localhost','root','','datalogin')or die("connect error".mysqli_connect_error());

$sql="insert into login (username,password,name)
values (' $name','$pass','$email')";

$resulte=mysqli_query($conn,$sql);

if($resulte)
{
    echo "data inserted successfully";
header("location:login.php");
}
else{
    die(mysqli_error($conn));

}}
?>
