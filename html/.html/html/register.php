<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FOOD MEXO";



$user=$_POST['username']
$password=$_POST['password']
$email=$_POST['email']
$phonenumber=$_POST['phonenumber']


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (username, password, email,phonenumber)
VALUES ('John', 'Doe', 'john@example.com',"6586879344");";
$sql .= "INSERT INTO MyGuests (username, password, email,phonenumber)
VALUES ('Mary', 'Moe', 'mary@example.com',"6789043217");";
$sql .= "INSERT INTO MyGuests (username, password, email,phonenumber)
VALUES ('Julie', 'Dooley', 'julie@example.com',"7654889490")";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>