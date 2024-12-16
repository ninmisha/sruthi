<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ninmisha";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

$user = $_POST["username"];
$pass = $_POST["password"];
$email = $_POST["email"];
$phone = $_POST["phone"];



if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO ninmisha (USER_NAME,PASS,EMAIL,PHONE) 
VALUES ('$user', '$pass', '$email','$phone')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>