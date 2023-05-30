
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
    <a href="prodect.html"> <button class="btn btn-primary m-5 text-light">
اضافه منتج جديد
    </button></a>

    
    <table class="table">
      <thead>
      <tr >
     
      

        
        
        
        
       
       
        <th scope="col">                 تاريخ الانتهاء 
 
        </th>
        <th scope="col">                تاريخ الانتاج
 
 </th>        <th scope="col">                السعر النهائي

        </th>
    
        <th scope="col">   الخصم 
        </th>
        <th scope="col">   الاعلانات
        </th>
        <th scope="col"> الضرائب  </th>

        <th scope="col"> السعر  </th>

        <th scope="col">                 اسم المنتج

        </th>
        <th scope="col">    رقم المنتج

      </tr>
  </thead>
       <tbody>
       <?php 
$conn=mysqli_connect('localhost','root','','prodectphp')or die("connect error".mysqli_connect_error());
$sql="select *from prodect";
    $reslut=mysqli_query($conn,$sql);
    if($reslut){
      while($row=mysqli_fetch_assoc($reslut)){
        $id=$row['id'];
$name=$row['name'];
$price=$row['price'];
$taxes=$row['taxes'];
$ale=$row['ale'];
$discount=$row['discount'];

$priceend=$row['priceend'];
$datas=$row['datas'];
$datae=$row['datae'];

echo  '<tr>
<td>'.$datae.'</td>
<td>'.$datas.'</td>
<td>'.$priceend.'</td>
<td>'.$discount.'</td>
<td>'.$ale.'</td>

<td>'.$taxes.'</td>

<td>'.$price.'</td>

<td>'.$name.'</td>
<th scope="row">'.$id.'</th>


     
    <td>                                                                        
      <button class="btn btn-primary  "> <a class="text-light" href="updateprodect.php? updteid='.$id.'">تعديل </a></button>  
      <button class="btn btn-danger "> <a class="text-light" href="deletprodect.php? deleteid='.$id.'  "
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