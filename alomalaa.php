
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
<div class="container">
    <form action="http://localhost/p1.php" method="post">
        
    <div class="form-group">
        <label>
            اسم العميل
        </label>
        <input class="form-control" placeholder="ادخل اسم العميل" type="text" name="namea" id="">

    </div><div class="form-group">
        <label>
            هاتف العميل
        </label>
        <input class="form-control" placeholder="ادخل هاتف العميل" type="tel" name="tela" id="">

    </div><div class="form-group">
        <label>
            عنوان العميل
        </label>
        <input class="form-control" placeholder="ادخل عنوان العميل" type="text" name="address" id="">

    </div><div class="form-group">
        <label>
            بريد العميل
        </label>
        <input class="form-control" placeholder="ادخل بريد العميل" type="email" name="emaila" id="">

    </div>
    <div class="form-group">
        <label>
            تاريخ بدايه التعامل
        </label>
        <input class="form-control" placeholder="ادخل تاريخ بدايه التعامل" type="date" name="dataa" id="">

    </div>
    <a href="login2.php"> <button  name="submit" class="btn btn-primary">submit</button></a>
   <a href="http://localhost/projectphp/disblay.php"> <button type="submit" name="submit" class="btn btn-primary">submit</button></a>
    </form>
</div>
<script src="js/jquery.3.6.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>