


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
   
                <table class="table">
      <thead>
      <tr >
        <th scope="col">id </th>

        <th scope="col">name   
        </th>
        
        <th scope="col">email   
        </th>
        <th scope="col"> action  
        </th>
      </tr>
  </thead>
       <tbody>
        <?php 
        $serv="localhost";
        $user="root";
        $passw="";
        $data="myshopnew";
        $conn=new mysqli($serv,$user,$passw,$data);
if($conn->connect_error){
    die("connection-failed".$conn->connect_error);
}
$sql="SELECT * FROM clinet";
$result=$conn->query($sql);
if(!$result){
    die("invalied query" .$conn->error) ; 
}
while($row= $result->fetch_assoc()){
    echo " <tr>
    <td>$row[id]</td>
    <td>$row[name]</td>
    <td>$row[email]</td>
  <td>  <a  class='btn btn-primary btn-sm' href='/myshop/edit.php?id=$row[id]'>تعديل </a>  
    <a  class='btn btn-primary btn-sm' href='/myshop/delet.php?$row[id]'>حذف </a>  </td>

</tr>";

}


        ?>
        <tr>
        <td>10</td>
        <td>ahmed</td>
        <td>ahmed@gmail.com</td>
        <td><a  class="btn btn-primary btn-sm" href="/myshop/edit.php">تعديل </a>  
        <a  class="btn btn-primary btn-sm" href="/myshop/delet.php">حذف </a>  </td>

</tr>
</tbody></table>

    </div>
    

    <script src="js/jquery.3.6.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>