<?php
include 'config.php';
?>
<?php
$email = $_POST["email"];
$password = $_POST["password"];
$name = $_POST["name"];

$sql = "INSERT INTO users(name,email, password) VALUES ('$name','$email','$password');";
$result = mysqli_query($conn, $sql) or die("Query Failed!");

header("location: ./login.php");
mysqli_close($conn);
?>