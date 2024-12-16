<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FOOD MEXO";



$user=$_POST['username']
$pass=$_POST['password']
$email=$_POST['email']
$phone=$_POST['phone number']


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ninmisha (username, pass, email,phone)
VALUES ('John', 'Doe', 'john@example.com',"262627734789")";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
