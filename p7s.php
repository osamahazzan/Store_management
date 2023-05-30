
<?php
 $i="";
echo $i=$_GET['id'];
echo "hello";
if($_SERVER["REQUEST_METHOD"]=='GET'){
    $i=$_GET['id'];
    $name=$_GET['names'];
    $managers=$_GET['managers'];
    $address=$_GET['address'];
$numbertrukila=$_GET['numbertrukila'];
$capacityofstore=$_GET['capacityofstore'];
echo $i;
$conn=mysqli_connect('localhost','root','','store')or die("connect error".mysqli_connect_error());

$sql="UPDATE  stors set names='$name',manager='$managers',address='$address',numbertruk='$numbertrukila',capacityofstore='$capacityofstore'
where numbers='$i'";
echo $sql;

$resulte=mysqli_query($conn,$sql);

if($resulte)
{ 
    header('location:/projectphp/disblaystore.php') ;       

}
else{
    die(mysqli_error($conn));

}}
?>
