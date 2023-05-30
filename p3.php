<?php 
if(isset ($_POST['submit'])){
    $name=$_POST['names'];
    $managers=$_POST['managers'];
    $address=$_POST['address'];
$numbertrukila=$_POST['numbertrukila'];
$capacityofstore=$_POST['capacityofstore'];
$conn=mysqli_connect('localhost','root','','store')or die("connect error".mysqli_connect_error());

$sql="insert into stors (names,manager,address,numbertruk,capacityofstore)
values (' $name','$managers','$address','$numbertrukila','$capacityofstore')";

$resulte=mysqli_query($conn,$sql);

if($resulte)
{
    echo "data inserted successfully";
    header('location:/projectphp/disblaystore.php') ;       


}
else{
    die(mysqli_error($con));

}}
?>
