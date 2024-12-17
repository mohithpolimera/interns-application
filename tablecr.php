<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmrl";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE kmrlform(
id INT(6)  PRIMARY KEY,
name VARCHAR(30),
email VARCHAR(30),
password VARCHAR(30),
phonenumber VARCHAR(30),
institution VARCHAR(30),
course VARCHAR(30),
status VARCHAR(50),
role VARCHAR(100),
count INT(),
designation VARCHAR(50)
)";
if ($conn->query($sql) === TRUE) {
  echo "Table kmrlform created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
?>