<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$sql = "INSERT INTO mytble (username,email,password,confirmpassword)
VALUES ('$username','$email','$password','$confirmpassword')";

if ($conn->query($sql) === TRUE) {
    header("Location:trading.html ");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
