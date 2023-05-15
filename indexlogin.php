<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO myfood (email,password)
VALUES ('$email','$password')";

if ($conn->query($sql) === TRUE) {
    header("Location:trading.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
