<?php
echo "eee";
$conn=mysqli_connect('localhost','root','','alomalaa')or die("connect error".mysqli_connect_error());
if(isset ($_GET['deleteid'])){
    $id=($_GET['deleteid']);
    $sql="delete from aloma where numbera=$id";
    $r=mysqli_query($conn,$sql);
    if($r){
header('location:disblay.php') ;       
    }
    else{
        die("connect error".mysqli_connect_error());
    }
}
?>