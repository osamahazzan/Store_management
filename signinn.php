 <?php
session_start();
require_once 'logincookes.php'; // Include the database connection script
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST['username'];
$password = $_POST['password'];
// Retrieve user details from the database based on theentered username

$sql = "SELECT id, password FROM login WHERE
username='$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
$row = mysqli_fetch_assoc($result);
// Verify the entered password against the stored hashedpassword
if (password_verify($password, $row['password'])) {
// Set a cookie for authentication
setcookie("id", $row['id'], time() + (86400 *
30), "/");
header("Location: login2.php"); // Redirect to themain application page
} else {
echo "Invalid password";
}
} else {
echo "User not found";
}
}
mysqli_close($conn);
?>