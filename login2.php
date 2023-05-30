 <?php
session_start();
if (!isset($_COOKIE['id'])) {
header("Location: login.html"); // Redirect to the login

exit;
}
 //User is authenticated, proceed with the main application

// Example: Retrieve and display the user's ID from the cookie
$user_id = $_COOKIE['id'];
//echo "Welcome, User: ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        select{
            -webkit-appearance:none;
            -moz-appearance:none;
            appearance:none;
        }
    </style>

    <title>Document</title>
</head>
<body>
    <div class="row">
    <div class="col-9">

    <img src="a.jpg" width="600 px"></div>

    <div class="col-3">
       <div>
        <br><br><br>
       <h5><button> <a href="projectphp/alomalaa.html">صفحه تسجيل بيانات العملاء </a></h5></button>
        <h5><button><a href="projectphp/stoers.html">صفحه تسجيل بيانات المخازن  </a></h5></button>
        <h5><button><a href="projectphp/prodect.html">صفحه  تسجيل بيانات المنتجات  </a></h5></button>
        </div>
    </div>

</div>

    <script src="js/jquery.3.6.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>