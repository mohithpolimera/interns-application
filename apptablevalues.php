<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmrl";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;
require 'vendor/autoload.php';
require __DIR__ . '/vendor/autoload.php';
function sendEmail($email) {
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = 'evaluate1234567@gmail.com'; // SMTP username
        $mail->Password = 'nyly oydm hsft kvzm'; // SMTP password
        $mail->SMTPSecure ='ssl'; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465; // TCP port to connect
        // Recipients
        $mail->setFrom('evaluate1234567@gmail.com', 'test');
        $mail->addAddress($email); // Add a recipient
        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Regarding KMRL Internship';
        $mail->Body = '<h1>Your Application Form is Submitted Successfully</h1>Please Wait until the Details are verified by our Finance Department<br>For any Queries Contact toll free-1800 425 0355<br>We wish you a happy internship<br><br>*** Please do not reply.This is an auto-generated mail ***<br><br>Best Wishes,<br>HR,<br>
Kochi Metro Rail Limited,<br>
4th Floor,<br> JLN Metro Station,<br>
Kaloor,<br> Kochi-682018.';
        $mail->send();
        echo '';
    } catch (Exception $e) {
        echo "";
    }
}
if(isset($_POST['submit']))
{
$target_dir = "doc/";
$file_name = time().'_'.basename($_FILES["empsignature"]["name"]);
$target_file = $target_dir . $file_name;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check file size
if ($_FILES["empsignature"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["empsignature"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["empsignature"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


$file_name1 = time().'_'.basename($_FILES["studentsignature"]["name"]);
$target_file1 = $target_dir . $file_name1;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
// Check file size
if ($_FILES["studentsignature"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["studentsignature"]["tmp_name"], $target_file1)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["studentsignature"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

    //print_R($_POST);
    $name=$_POST['name'];
    $collegerollno=$_POST['collegerollno'];
    $course=$_POST['course'];
    $branch=$_POST['branch'];
    $year=$_POST['year'];
    $studentmobileno=$_POST['studentmobileno'];
    $permanentaddress=$_POST['permanentaddress'];
    $localaddress=$_POST['localaddress'];
    $studentemail=$_POST['studentemail'];
    $caste=$_POST['caste'];
    $duration=$_POST['duration'];
    $fromdate=$_POST['fromdate'];
    $todate=$_POST['todate'];
    $collegename=$_POST['collegename'];
    $collegecoordinator=$_POST['collegecoordinator'];
    $collegeemail=$_POST['collegeemail'];
    $collegecontactnumber=$_POST['collegecontactnumber'];
    $paymentdate=$_POST['paymentdate'];
    $utrnumber=$_POST['utrnumber'];
    $empname=$_POST['empname'];
    $designation=$_POST['designation'];
    $empnumber=$_POST['empnumber'];
    $department=$_POST['department'];
    $empphonenumber=$_POST['empphonenumber'];
    $empsignature=$file_name;
    $place=$_POST['place'];
    $date=$_POST['date'];
    $studentsignature=$file_name1;
    $sql="insert into kmrlappform(name,collegerollno,course,branch,year,studentmobileno,permanentaddress,localaddress,studentemail,caste,duration,fromdate,todate,collegename,collegecoordinator,collegeemail,collegecontactnumber,paymentdate,utrnumber,empname,designation,empnumber,department,empphonenumber,empsignature,place,date,studentsignature) 
    values('$name','$collegerollno','$course','$branch','$year','$studentmobileno','$permanentaddress','$localaddress','$studentemail','$caste','$duration','$fromdate','$todate','$collegename','$collegecoordinator','$collegeemail','$collegecontactnumber','$paymentdate','$utrnumber','$empname','$designation','$empnumber','$department','$empphonenumber','$empsignature','$place','$date','$studentsignature')";
    $result = $conn->query($sql);
    if($result==1)
    {
      $sql1="Update kmrlform set count='2' where email = '".$studentemail."' LIMIT 1";
      $result1 = $conn->query($sql1);
      sendEmail($studentemail);
    }
}
//here i have to perform if and else in if diplay the message and app form in else wait untill msg
header('Location: block1.php?email_value='.$studentemail);
$conn->close();
?>