<?php
echo "eee";
$conn=mysqli_connect('localhost','root','','prodectphp')or die("connect error".mysqli_connect_error());
if(isset ($_GET['deleteid'])){
    $id=($_GET['deleteid']);
    $sql="delete from prodect where id=$id";
    $r=mysqli_query($conn,$sql);
    if($r){
header('location:disblayprodect.php') ;       
    }
    else{
        die("connect error".mysqli_connect_error());
    }
}
?>