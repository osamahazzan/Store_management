<<?php
$conn=mysqli_connect('localhost','root','','alomalaa')or die("connect error".mysqli_connect_error());

$id="";
$name="";
$tel="";
$addres="";
$email="";
$data="";
if(isset  ($_GET ['updteid'])){
    
    $id =$_GET ['updteid'];
    echo $id;}
if ($_SERVER['REQUEST_METHOD']=='GET'){


$sql="select * from aloma where numbera=$id";
  $reslut=mysqli_query($conn,$sql);
  if(!$reslut){
    header("location:/projectphp/disblay.php");}
    else{
    while($row=mysqli_fetch_assoc($reslut))
     {$id=$row['numbera'];
$name=$row['namea'];
$tel=$row['phonea'];
$addres=$row['addressa'];
$email=$row['emaila'];
$data=$row['datesa'];}}}

?>
  

 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
    <style>
        *{
            direction: rtl;
        }
        .container{
            background-color: rgba(35, 161, 211, 0.74);
            border-radius: 5px;
        }
        h5 {
text-align: right;
        }
        input:focus{
            transform: scale(1.1);
           
        }
        h2{
            
            background-color: rgba(0, 102, 255, 0.281); 
            text-align: center;
            height: 80px;
           
        }
        #a{
            float:right;

        }
    </style>
</head>
<body>

<div class="container">
    <form action="http://localhost/p2.php" method="get">
        <h2>صفحه العملاءوالموردين</h2>

    <div class="form-group">
        <h5>
            اسم العميل
        </h5>
        <input class="form-control" value="<?php  echo $name;?>" placeholder="ادخل اسم العميل" type="text" name="namea" id="">

    </div><div class="form-group">
        <h5>
            هاتف العميل
        </h5>
        <input class="form-control"value="<?php  echo $tel;?>" placeholder="ادخل هاتف العميل" type="tel" name="tela" id="">

    </div><div class="form-group">
        <h5>
            عنوان العميل
        </h5>
        <input class="form-control"value="<?php  echo $addres;?>" placeholder="ادخل عنوان العميل" type="text" name="address" id="">

    </div><div class="form-group">
        <h5>
            بريد العميل
        </h5>
        <input class="form-control" value="<?php  echo $email;?>" placeholder="ادخل بريد العميل" type="email" name="emaila" id="">

    </div>
    <div class="form-group">
        <h5>
        تاريخ بدايه التعامل
        </h5>
        <input class="form-control" value="<?php  echo $data;?>" placeholder="ادخل تاريخ بدايه التعامل" type="date" name="dataa" id="">
        <input  hidden name="id" value="<?php  echo $id;?>">
    </div>
    <br>
   <a > <input type="submit" id="a" name="submit" class="btn btn-primary"></a>
    </form>
    <br><br>
</div>
<script src="js/jquery.3.6.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
