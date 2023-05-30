<?php
if($_SERVER['REQUEST_METHOD']=='post'&& isset($_POST['submit'])){
    $conn=mysqli_connect('localhost','root','','ali')or die("connect error".mysqli_connect_error());
    if(isset($_POST['id']) && isset($_POST['name']) && isset( $_POST['phone']) && isset($_POST['email']))
    {
        $id=$_POST['id'];

        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $sql="INSERT INTO users(id,name,phone,email)values ('$id', '$name', '$phone','$email')";
        $query=mysqli_query($conn,$sql);
        if($query){
            echo 'entery successful';
        }
        else{
            echo 'error';
        }
    }
}
?>