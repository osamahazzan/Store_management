
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
    <a href="alomalaa.html"> <button class="btn btn-primary m-5 text-light">
اضافه عميل جديد
    </button></a>

    
    <table class="table">
      <thead>
      <tr >
        <th scope="col">رقم العميل</th>

        <th scope="col">  اسم العميل
        </th>
        <th scope="col">  هاتف العميل
        </th>
        <th scope="col"> عنوان العميل
        </th>
        <th scope="col">  بريد العميل
        </th>
        <th scope="col">  تاريخ بدايه التعامل
        </th>
        <th scope="col">العمليات</th>

      </tr>
  </thead>
       <tbody>
       <?php 
$conn=mysqli_connect('localhost','root','','alomalaa')or die("connect error".mysqli_connect_error());
$sql="select * from aloma";
    $reslut=mysqli_query($conn,$sql);
    if($reslut){
      while($row=mysqli_fetch_assoc($reslut)){
        $id=$row['numbera'];
$name=$row['namea'];
$tel=$row['phonea'];
$addres=$row['addressa'];
$email=$row['emaila'];
$data=$row['datesa'];
echo  '<tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$tel.'</td>
<td>'.$addres.'</td>
<td>'.$email.'</td>
<td>'.$data.'</td>
     
    <td>
      <button class="btn btn-primary  "> <a class="text-light" href="update.php?updteid='.$id.'">تعديل </a></button>  
      <button class="btn btn-danger "> <a class="text-light" href="delete.php?deleteid='.$id.'  "
      >حذف </a></button>    </td>

  </tr>';
}

}
?>

  </tbody>
    </table>
    <script src="js/jquery.3.6.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>