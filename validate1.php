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
function sendEmail($email, $name, $course, $institution, $from, $to,$status) {
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
        if($status=='verified')
        {
            $table = '<table border="1" cellpadding="10" cellspacing="0">';
        $table .= '<tr><th>Name of the Student</th><th>Course&Branch/Specializaton of Study</th><th>Name of the Institution/College</th></tr>';
        $table .= '<tr><td>' . $name . '</td><td>' . $course . '</td><td>' . $institution . '</td></tr>';
        $table .= '</table>';
        $table1 = '<table border="1" cellpadding="10" cellspacing="0">';
        $table1 .= '<tr><th>Duration of the training to be given</th><th>Advised to Contact</th><th>Name&Designation of Reporting Authority</th></tr>';
        $table1 .= '<tr><td>'. $from .' to'. $to .'</td><td>'.$from.'</td><td>Sri.Pradeep A R(Manager-HR)</td></tr>';
        $table1 .= '</table>';
        $mail->Body = '<h1>Your Payment Details are Verifed Successfully</h1><br><h1>Provisional Permission To Undergo Internship</h1>Permission is hereby granted to the following Student to undergo INTERNSHIP Training at our organization as per the details furnished below:<br><br>' . $table . '<br><h1>Details of the Training</h1>' . $table1.'<br>We wish you a happy internship<br><br>*** Please do not reply.This is an auto-generated mail ***<br><br>Best Wishes,<br>HR,<br>
Kochi Metro Rail Limited,<br>
4th Floor,<br> JLN Metro Station,<br>
Kaloor,<br> Kochi-682018.';
        }
        else if($status=='notverified')
        {
            $mail->Body = '<h1>Your Payment Details are not verified due to some issues</h1>Please check if you have entered the correct utr number or not<br>For any Queries Contact toll free-1800 425 0355<br>We wish you a happy internship<br><br>*** Please do not reply.This is an auto-generated mail ***<br><br>Best Wishes,<br>HR,<br>
Kochi Metro Rail Limited,<br>
4th Floor,<br> JLN Metro Station,<br>
Kaloor,<br> Kochi-682018.';
        }
        $mail->send();
        echo '';
    } catch (Exception $e) {
        echo "";
    }
}
//print_R($_POST);
$email = $_POST['email_value'];
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
if(isset($_POST['status']))
{
    $status =$_POST['status'];
    $sql = "UPDATE kmrlappform SET status='$status' WHERE studentemail = '".$email."' LIMIT 1";
    $result = $conn->query($sql);
    if($result == 1){
        sendEmail($email, $name, $course, $institution, $from, $to,$status);
        ?>
        <script>
        window.location.href='finance1.php';
        </script>
    <?php
}
    
}
$sql1 = "SELECT name,studentmobileno,studentemail,fromdate,todate,status FROM kmrlappform";
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