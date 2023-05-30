<?php 
$ser="localhost";
        $user="root";
        $passw="";
        $data="myshopnew";
        $conn=new mysqli($ser,$user,$passw,$data);

$name="";
$email="";
$error="";
$sucsess="";

if($_SERVER['REQUEST_METHOD']=='post'){
    $name=$_POST["name"];
    $email=$_POST["email"];
    do{
        if(empty ($name)|| empty($email)){
            $error="all the faield is required";
            break;
        }
        $sql="INSERT INTO users(id,name,phone,email)values ( '$name','$email')";
        $result=$conn->query($sql);
      if($result){
        $error="invalid query".$conn->error;
        break;
      }

        $name="";
        $email=""; 
        $sucsess="added correctly";
        header("location:/myshop/index.php");
        exit;

    }while(false);
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
                    <input type="text"class="form-control" name="name" value="<?php echo $name ?>">
                </div>

            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-lable">email</label>
                <div class="col-sm-6">
                    <input type="text"class="form-control" name="email" value="<?php echo $email ?>">
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
                
    <script src="js/jquery.3.6.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>