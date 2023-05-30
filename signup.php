 <?php
session_start();
require_once 'logincookes.php'; // Include the database connection script
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST['username'];
$password = $_POST['password'];
// Validate the form inputs (e.g., check for unique
//username, password length)
// Hash the password for security (use a suitable hashing
//algorithm, e.g., bcrypt)
$hashedPassword = password_hash($password,PASSWORD_DEFAULT);
// Insert user details into the database
$sql = "INSERT INTO login (username, password) VALUES
('$username', '$hashedPassword')";
if (mysqli_query($conn, $sql)) {
// Set a cookie for authentication
setcookie("user_id", mysqli_insert_id($conn), time() +
(86400 * 30), "/");
header("Location: signin.php"); // Redirect to the mainapplication page
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }}
mysqli_close($conn);
?>