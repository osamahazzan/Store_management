<?php
session_start();
// Clear the authentication cookie
setcookie("id", "", time() - 3600, "/");
header("Location: login.html"); // Redirect to the login page
exit();
?>