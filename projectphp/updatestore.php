<?php
$id="";
  if(isset  ($_GET ['updteid'])){
    
    $id =$_GET ['updteid'];
//echo $id;
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
    <style>
        *{
            direction: rtl;
        }
        .container{
            background-color: rgba(35, 82, 211, 0.562);
            border-radius: 5px;
            width:600px;        }
        h5 {
text-align: right;
        }
        input:focus{
            transform: scale(1.1);
           
        }
        h1{
            
            background-color: rgba(0, 102, 255, 0.616); 
            text-align: center;
            height: 80px;
           
        }
        input[type="submit"]{
            float:right;

        }
    </style>
</head>
<body>
<div class="container">
    <form action="http://localhost/p4.php" method="get">
        <h1>صفحه المخازن</h1>

<div class="form-group">
    <h5>
         اسم المخزن
    </h5>
    <input class="form-control" type="text" name="names" id="">

</div><div class="form-group">
    <h5>
         مدير المخزن
    </h5>
    <input class="form-control"  type="text" name="managers" id="">

</div><div class="form-group">
    <h5>
         الموقع
    </h5>
    <input class="form-control" type="text" name="address" id="">

</div><div class="form-group">
    <h5>
         اجمالي شاحنات المخزن 
    </h5>
    <input class="form-control" type="number" name="numbertrukila" id="">

</div>
<div class="form-group">
    <h5>
          سعه المخزن
    </h5>
    <input class="form-control"  type="number" name="capacityofstore" id="">
        <input  hidden name="id" value="<?php  echo $id;?>">
   
   <a > <br><input type="submit" name="submit" class="btn btn-primary"></a>
    </div><br><br> </form>
</div>
<script src="js/jquery.3.6.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>