<?php 
if(isset ($_POST ['submit'])){
    $name=$_POST['namea'];
    $tel=$_POST['tela'];
    $address=$_POST['address'];
$email=$_POST['emaila'];
$dataa=$_POST['dataa'];
$sql="insert into aloma (namea,phonea,addressa,emaila,datesa)
values (' $name','$tel','$address','$email','$dataa')";
$conn=mysqli_connect('localhost','root','','alomalaa')or die("connect error".mysqli_connect_error());

$resulte=mysqli_query($conn,$sql);

if($resulte)
{
    header('location:/projectphp/disblay.php');

}
else{
    die(mysqli_error($con));

}}?>