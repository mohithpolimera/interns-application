<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmrl";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE kmrlappform(
id INT(6)  PRIMARY KEY,
name VARCHAR(30),
collegerollno VARCHAR(30),
course VARCHAR(30),
branch VARCHAR(30),
year VARCHAR(30),
studentmobileno VARCHAR(30),
permanentaddress VARCHAR(50),
localaddress VARCHAR(50),
studentemail VARCHAR(30),
caste VARCHAR(30),
duration VARCHAR(30),
fromdate DATE,
todate DATE,
collegename VARCHAR(50),
collegecoordinator VARCHAR(30),
collegeemail VARCHAR(30),
collegecontactnumber VARCHAR(30),
paymentdate DATE,
utrnumber VARCHAR(30),
empname VARCHAR(30),
designation VARCHAR(30),
empnumber VARCHAR(30),
department VARCHAR(30),
empphonenumber VARCHAR(30),
empsignature VARCHAR(30),
place VARCHAR(30),
date DATE,
studentsignature VARCHAR(30),
status VARCHAR(50)
)";
if ($conn->query($sql) === TRUE) {
  echo "Table kmrlappform created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
?>