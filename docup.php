<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmrl";
$conn = new mysqli($servername, $username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection Failed : ". $conn->connect_error);
}
if(isset($_POST['submit']))
{
  $target_dir = "doc/";
$file_name = time().'_'.basename($_FILES["collegeletter"]["name"]);
$target_file = $target_dir . $file_name;
$uploadOk = 1;
$collegeletterFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$check = getimagesize($_FILES["collegeletter"]["tmp_name"]);
 

if ($_FILES["collegeletter"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

if($collegeletterFileType != "jpg" && $collegeletterFileType != "png" && $collegeletterFileType != "jpeg"
&& $collegeletterFileType != "gif" && $collegeletterFileType != "pdf" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF & pdf files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";

} else {
  if (move_uploaded_file($_FILES["collegeletter"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["collegeletter"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
$collegeletter = $file_name;
//insert statement-----------------------------------------------
$file_name = time().'_'.basename($_FILES["cvname"]["name"]);
$target_file = $target_dir . $file_name;
$uploadOk = 1;
$cvFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


 $check = getimagesize($_FILES["cvname"]["tmp_name"]);
  

if ($_FILES["cvname"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

if($cvFileType != "jpg" && $cvFileType != "png" && $cvFileType != "jpeg"
&& $cvFileType != "gif" && $cvFileType != "pdf") {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";

} else {
  if (move_uploaded_file($_FILES["cvname"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["cvname"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

}
//insert statement--------------------------------------------------------------
$cvname = $file_name;
  $sql="insert into academic(cvname,collegeletter) values('$cvname','$collegeletter')";
  $result = $conn->query($sql);
}

$conn->close();
?>