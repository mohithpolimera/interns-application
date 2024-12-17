<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmrl";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email = $_GET['email_value'];
$sql="select * from kmrlappform where studentemail = '".$email."' LIMIT 1";
$result = $conn->query($sql);
$row =$result->fetch_assoc();
$from=$row['fromdate'];
$to=$row['todate'];
$sql1="select * from kmrlform where email = '".$email."' LIMIT 1";
$result1 = $conn->query($sql1);
$row1 =$result1->fetch_assoc();
$name=$row1['name'];
$course=$row1['course'];
$institution=$row1['institution'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;
require 'vendor/autoload.php';
require __DIR__ . '/vendor/autoload.php';
function sendEmail($email, $name, $course, $institution, $from, $to) {
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
        $table = '<table border="1" cellpadding="10" cellspacing="0">';
        $table .= '<tr><th>Name of the Student</th><th>Course&Branch/Specializaton of Study</th><th>Name of the Institution/College</th></tr>';
        $table .= '<tr><td>' . $name . '</td><td>' . $course . '</td><td>' . $institution . '</td></tr>';
        $table .= '</table>';
        $table1 = '<table border="1" cellpadding="10" cellspacing="0">';
        $table1 .= '<tr><th>Duration of the training to be given</th><th>Advised to Contact</th><th>Name&Designation of Reporting Authority</th></tr>';
        $table1 .= '<tr><td>'. $from .' to'. $to .'</td><td>'.$from.'</td><td>Sri.Pradeep A R(Manager-HR)</td></tr>';
        $table1 .= '</table>';
        $mail->Body = '<h1>Provisional Permission To Undergo Internship</h1>Permission is hereby granted to the following Student to undergo INTERNSHIP Training at our organization as per the details furnished below:<br><br>' . $table . '<br><h1>Details of the Training</h1>' . $table1.'<br>We wish you a happy internship<br><br>*** Please do not reply.This is an auto-generated mail ***<br><br>Best Wishes,<br>HR,<br>
Kochi Metro Rail Limited,<br>
4th Floor,<br> JLN Metro Station,<br>
Kaloor,<br> Kochi-682018.';
        $mail->send();
        echo 'Email has been sent to ' . $email;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
// Usage example
$recipientEmail =$email;
sendEmail($recipientEmail, $name, $course, $institution, $from, $to);
?>