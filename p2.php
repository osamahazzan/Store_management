
<?php
 $i="";
echo $i=$_GET['id'];
echo "hello";
if($_SERVER["REQUEST_METHOD"]=='GET'){
    $i=$_GET['id'];
    $name=$_GET['namea'];
    $tel=$_GET['tela'];
    $address=$_GET['address'];
$email=$_GET['emaila'];
$capacityofstore=$_GET['capacityofstore'];
echo $i;
$conn=mysqli_connect('localhost','root','','alomalaa')or die("connect error".mysqli_connect_error());

$sql="UPDATE  aloma set namea='$name',phonea='$tel',addressa='$address',emaila='$email',datesa='$datesa'
where numbera='$i'";
echo $sql;

$resulte=mysqli_query($conn,$sql);

if($resulte)
{ 
    header('location:/projectphp/disblay.php') ;       

}
else{
    die(mysqli_error($conn));

}}
?>
