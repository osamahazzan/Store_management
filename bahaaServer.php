<?php

    
    if(isset($_POST['id']) && isset($_POST['name']) && isset( $_POST['phone']) && isset($_POST['email']))
    {

        $id=$_POST['id'];

        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $conn=mysqli_connect('localhost','root','','bb')or die("connect error".mysqli_connect_error());
        $sql="INSERT INTO users(id,name,phone,email)values ('$id', '$name', '$phone','$email')";
        $query=mysqli_query($conn,$sql);
        if($query){
            echo 'entery successful';
        }
        else{
            echo 'error';
        }
    }
?>
