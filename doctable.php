<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmrl";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE academic(
id INT(6)  PRIMARY KEY,
email VARCHAR(50),
cvname VARCHAR(30),
collegeletter VARCHAR(30),
image VARCHAR(100)
)";
if ($conn->query($sql) === TRUE) {
  echo "Table academic created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
?>