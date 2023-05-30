<?php 
if(isset ($_POST ['submit'])){
    $name=$_POST['namea'];
    $price=$_POST['price'];
    $ael=$_POST['ael'];
$taxes=$_POST['taxes'];
$discount=$_POST['discount'];
$priceend=$_POST['priceend'];


$dataa=$_POST['dataa'];

$datae=$_POST['datae'];
$conn=mysqli_connect('localhost','root','','prodectphp')or die("connect error".mysqli_connect_error());
$discount=$_POST['discount'];
$sql="insert into prodect (name,price,taxes,ale,discount,priceend,datas,datae)
values (' $name','$price',' $ael','$taxes','$dataa','$discount','$priceend','$dataa')";

$resulte=mysqli_query($conn,$sql);

if($resulte)
{
    echo "data inserted successfully";
    header('location:/projectphp/disblayprodect.php') ;       

}
else{
    die(mysqli_error($conn));

}}
?>
