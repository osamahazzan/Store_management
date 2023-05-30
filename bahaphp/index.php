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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for=""><h3>id</h3></label>
    <input type="number" name="id" id="id" required/>

    <label for=""><h3>name</h3></label>

        <input type="text"  name="name" id="name" required/>
        <label for=""><h3>phone</h3></label>
        
        <input type="text" name="phone" id="phone" required/>
        <label for=""><h3>email</h3></label>
        <input type="email" name="email" id="email" required/>

        
        <input type='submit' name='submit' id='submit'/>
    </form>
</body>
</html>