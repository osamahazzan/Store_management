<?php
echo "eee";
$conn=mysqli_connect('localhost','root','','store')or die("connect error".mysqli_connect_error());
if(isset ($_GET['deleteid'])){
    $id=($_GET['deleteid']);
    $sql="delete from stors where numbers=$id";
    $r=mysqli_query($conn,$sql);
    if($r){
header('location:disblaystore.php') ;       
    }
    else{
        die("connect error".mysqli_connect_error());
    }
}
?>