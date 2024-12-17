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
function sendEmail($email,$status) {
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
        if($status=='accept')
        {
            $mail->Body = '<h1>Your Academic Details are Verified Successfully</h1>Now you can fill out your application form<br>For any Queries Contact toll free-1800 425 0355<br>We wish you a happy internship<br><br>*** Please do not reply.This is an auto-generated mail ***<br><br>Best Wishes,<br>HR,<br>
Kochi Metro Rail Limited,<br>
4th Floor,<br> JLN Metro Station,<br>
Kaloor,<br> Kochi-682018.';
        }
        else if($status=='reject')
        {
            $mail->Body = '<h1>Sorry,there are no slots left</h1>you can apply again with new duration<br>For any Queries Contact toll free-1800 425 0355<br>We hope we will select you next time.<br><br>*** Please do not reply.This is an auto-generated mail ***<br><br>Best Wishes,<br>HR,<br>
Kochi Metro Rail Limited,<br>
4th Floor,<br> JLN Metro Station,<br>
Kaloor,<br> Kochi-682018.';
        }
        $mail->send();
        echo '';
    } catch (Exception $e) {
        echo '';
    }
}
//print_R($_POST);
$email = $_POST['email_value'];
if(isset($_POST['status']))
{
    $status =$_POST['status'];
    $sql = "UPDATE kmrlform SET status='$status' WHERE email = '".$email."' LIMIT 1";
    $result = $conn->query($sql);
    if($result == 1){
        sendEmail($email,$status);
        ?>
        <script>
        window.location.href='hr.php';
        </script>
    <?php
    }
}
$sql1 = "SELECT * FROM kmrlform";
$result1 = $conn->query($sql1);
$html = "<table border='1'>";
while($row =$result1->fetch_assoc() ){
    $html .="<tr>";
    foreach($row as $key => $val)
    {  
        $html .= " <th>".$key."</th>";
    }
    $html .="</tr>";
    $html .="<tr>";
    foreach($row as $key => $val){
    $html .= " <td>".$val."</td>";
    }
    $html .="</tr>";
    break;
}
while($row =$result1->fetch_assoc() ){
    $html .="<tr>";
    foreach($row as $key => $val){
    $html .= " <td>".$val."</td>";
    }
    $html .="</tr>";
    }
$html .= "</table>";
echo $html;
?>