
<?php
 $i="";
if($_SERVER["REQUEST_METHOD"]=='GET'){
    $i=$_GET['id'];
    $namea=$_GET['namea'];
    $price=$_GET['price'];
    $discount=$_GET['discount'];
$ael=$_GET['ael'];
$taxes=$_GET['taxes'];
$priceend=$_GET['priceend'];
$dataa=$_GET['dataa'];
$datae=$_GET['datae'];

$conn=mysqli_connect('localhost','root','','prodectphp')or die("connect error".mysqli_connect_error());

$sql="UPDATE  prodect set name='$namea',price='$price',taxes='$taxes',ale='$ael',discount='$discount',priceend='$priceend' , datas='$dataa' ,datae='$datae'
where id='$i'";

$resulte=mysqli_query($conn,$sql);

if($resulte)
{ 
    header('location:/projectphp/disblayprodect.php') ;       

}
else{
    die(mysqli_error($conn));

}}
?>
