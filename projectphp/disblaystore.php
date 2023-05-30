
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
    <a href="stoers.html"> <button class="btn btn-primary m-5 text-light">
اضافه مخزن جديد
    </button></a>

    
    <table class="table">
      <thead>
      <tr >
      <th scope="col">    رقم المخزن
        </th>
        <th scope="col">اسم المخزن  </th>

        <th scope="col">   مديرالمخزن 
        </th>
        <th scope="col">   الموقع
        </th>
        <th scope="col"> اجمالي شاحنات المخزن
        </th>
        <th scope="col">     سعه المخزن
        </th>
       

      </tr>
  </thead>
       <tbody>
       <?php 
$conn=mysqli_connect('localhost','root','','store')or die("connect error".mysqli_connect_error());
$sql="select *from stors";
    $reslut=mysqli_query($conn,$sql);
    if($reslut){
      while($row=mysqli_fetch_assoc($reslut)){
        $id=$row['numbers'];
$name=$row['names'];
$manager=$row['manager'];
$addres=$row['address'];
$numbertrukail=$row['numbertruk'];
$capacityofstore=$row['capacityofstore'];
echo  '<tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$manager.'</td>
<td>'.$addres.'</td>
<td>'.$numbertrukail.'</td>
<td>'.$capacityofstore.'</td>
     
    <td>                                                                        
      <button class="btn btn-primary  "> <a class="text-light" href="updatestore.php? updteid='.$id.'">تعديل </a></button>  
      <button class="btn btn-danger "> <a class="text-light" href="deletstore.php? deleteid='.$id.'  "
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