<?php
$conn=mysqli_connect('localhost','root','','prodectphp')or die("connect error".mysqli_connect_error());


if(isset  ($_GET ['updteid'])){
    
    $id =$_GET ['updteid'];
    echo $id;}
if ($_SERVER['REQUEST_METHOD']=='GET'){


$sql="select * from prodect where id=$id";
  $reslut=mysqli_query($conn,$sql);
  if(!$reslut){
    header("location:/projectphp/disblayprodect.php");}
    else{
        while($row=mysqli_fetch_assoc($reslut)){
            $id=$row['id'];
    $name=$row['name'];
    $price=$row['price'];
    $taxes=$row['taxes'];
    $ale=$row['ale'];
    $discount=$row['discount'];
    
    $priceend=$row['priceend'];
    $datas=$row['datas'];
    $datae=$row['datae'];}}}

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
            background-color: rgb(35, 170, 211);
font-size: large;;
            padding: 5px;
            border-radius: 5px;
            width: 700px;

        }
        h5 {
text-align: right;
        }
        input:focus{
            transform: scale(1.1);
           
        }
        h1{
            
            background-color: rgba(0, 255, 255, 0.363); 
            text-align: center;
            height: 80px;
           
        }
        input[type="submit"]{
            float:right;

        }
        #a{
            float:right;

        }
    </style>
</head>
<body>
<div class="container" >
<h1>صفحه   المنتجات</h1>

    <form action="http://localhost/updatep8.php" method="get">
        
        <div class="form-group">
        <h5>
            اسم المنتج
        </h5>
        <input class="form-control"required value="<?php  echo $name;?>" type="text" name="namea" id="">

    </div><div class=" row">
        <div class="col">
        <h5>
             السعر
        </h5>
        <input onkeyup="getTotal()" class="form-control" required value="<?php  echo $price;?>" type="tel" name="price" id="price">

    </div><div class="col">
        <h5>
             الخصم
        </h5>
        <input onkeyup="getTotal()" class="form-control" required value="<?php  echo $discount;?>" type="tel" name="discount" id="discount">

    </div>

    </div><div class=" row">
        <div class="col">
        <h5>
             الاعلانات
        </h5>
        <input onkeyup="getTotal()" class="form-control" required value="<?php  echo $ale;?>" type="tel" name="ael" id="ael">

    </div><div class="col">
        <h5>
             الضرائب
        </h5>
        <input onkeyup="getTotal()" class="form-control" required value="<?php  echo $taxes;?>" type="tel" name="taxes" id="taxes">

    </div>

    </div>
    <div class="form-group">
        <h5>
            السعر النهائي
        </h5>

        <input  class="form-control" required value="<?php  echo $priceend;?>" type="tel" name="priceend" id="priceend">

    </div>
    <div class="form-group">
        <h5>
           تاريخ الانتاج
        </h5>
        <input class="form-control" dir="ltr" required value="<?php  echo $datas;?>"  type="date" name="dataa" id="">

    </div><div class="form-group">
    <h5>
            تاريخ الانتهاء 
        </h5>
        <input class="form-control" dir="ltr"required  value="<?php  echo $datae;?>"  type="date" name="datae" id="">

        <input  hidden name="id" value="<?php  echo $id;?>">

    </div>
    <a > <input type="submit" name="submit" class="btn btn-primary"></a>
    <br>
    </form>
</div>
<script src="js/jquery.3.6.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="prodect.js"></script>

</body>
</html>