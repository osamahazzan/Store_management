<?php
$serv="localhost";
$user="root";
$passw="";
$data="myshop";
$conn=new mysqli($serv,$user,$passw,$data);

$name="";
$email="";
$error="";
$sucsess="";


if($_SERVER['REQUEST_METHOD']=='post')
{
    $name=$_POST["name"];
    $email=$_POST["email"];
  do{  if(empty($name)||empty($email))
    {$error="all the failed required";
   break; }
   $sql="INSERT INTO user(name,email)
values (' $name','$email')";
$res=$conn->query($sql);
if(!res){
    $error="invalid".$conn->query;
    break;
}
   $name="";
$email="";
$sucsess="sucssues";
header("location:/myshop/create.php");
} while(false);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Document</title>
</head>
<body>
    <div class="container my-5">
        <h2>new client</h2>
        <?php 
        if(!empty($error)){
           echo "$error"; 

        }?>
        <form action="" method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-lable">name</label>
                <div class="col-sm-6">
                    <input type="text"class="form-control" name="name" id="">
                </div>

            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-lable">email</label>
                <div class="col-sm-6">
                    <input type="text"class="form-control" name="email" id="">
                </div>

            </div>
            <?php 
if(!empty($sucsess)){
    echo "$sucsess"; 

 }?>        
            <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button  type="submit" class="btn btn-primary">submit</button>
                
                </div>

            </div>
        </form>
    </div>
    <script src="js/jquery.3.6.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>