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
        $mail->Body = '<h1>Thank you for registering into KMRL website</h1>For any Queries Contact toll free-1800 425 0355<br>We wish you a happy internship<br><br>*** Please do not reply.This is an auto-generated mail ***<br><br>Best Wishes,<br>HR,<br>
Kochi Metro Rail Limited,<br>
4th Floor,<br> JLN Metro Station,<br>
Kaloor,<br> Kochi-682018.';
        $mail->send();
        echo '';
    } catch (Exception $e) {
        echo '';
    }
}
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $hashed_password = md5($password);
    $phonenumber=$_POST['phonenumber'];
    $institution=$_POST['institution'];
    $course=$_POST['course'];
    $sql1="SELECT * FROM kmrlform";
    $result1 = $conn->query($sql1);
    $values1 =$result1->fetch_all();
    foreach ($values1 as $x) {
    if($email==$x[2])
    {
      alert1("Email Id already Registered");
      ?>
        <script>
        window.location.href='index.php';
        </script>
    <?php
    }
  }
  $sql="insert into kmrlform(name,email,password,phonenumber,institution,course) values('$name', '$email','$hashed_password','$phonenumber','$institution','$course')";
  $result = $conn->query($sql);
  if($result==1)
  {
    sendEmail($email);
  }
}
function alert1($message) { 
  echo "<script>alert('$message');</script>"; 
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Website</title>
    <link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c4/KMRL-logo.png" alt="Logo">
        </div>
        <h1>Kochi Metro Rail Limited</h1>
        <nav>
            <ul class="nav-links">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style1.css">
</head>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://media.licdn.com/dms/image/D5612AQGz2WdXMYmLig/article-cover_image-shrink_720_1280/0/1696145728645?e=2147483647&v=beta&t=RaQdJs8U0ff837DehEaSLyIlXdVml6igJ89fqLaWZP4" style="max-width: 110%;" 
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <form method="post" action="upload.php">
          <div class="divider d-flex align-items-center my-4">
            <h3 class="text-center fw-bold mx-3 mb-0">KMRL LOGIN</h3>
          </div>
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
            name="email" placeholder="Enter a valid email address" />
          </div>
          <div data-mdb-input-init class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
            name="password" placeholder="Enter password" />
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" required/>
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href='verify.php' class="text-body">Forgot password?</a>
            <a href='new.php' class="text-body">Change password?</a>
          </div>
          <div class="text-center text-lg-start mt-4 pt-2">
          <center>
            <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
            name="submit" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="http://localhost/kmrl_project/"
                class="link-danger">Sign Up</a></p>
</center>
          </div>
        </form>
      </div>
    </div>
  </div>
  
</section>
</main>

    <!-- Footer -->
    <footer>
        <ul class="footer-links">
            <li><a href="https://www.kochimetro.org/rti/">RTI</a></li>
            <li><a href="https://kochimetro.org/notifications-g-o-s/">NOTIFICATIONS&G.O S</a></li>
            <li><a href="https://kochimetro.org/open-data/">OPEN DATA</a></li>
            <li><a href="https://kochimetro.org/privacy-policy/">Privacy Policy</a></li>
            <li><a href="https://kochimetro.org/newsletters/">NEWSLETTERS</a></li>
            <li><a href="https://kochimetro.org/grievance-redressal/">GRIEVANCE REDRESSAL</a></li>
        </ul>
        <style>
    .icon-spacing {
        margin-right: 20px; /* Adjust as needed */
    }
    .phone-number {
        font-size: 14px; /* Adjust font size as needed */
    }
</style>
        <p>JLN Metro Station,4th Floor</p>
        <p>Kaloor,Ernakulam-682017</p>
        <a href="https://www.facebook.com/KochiMetroRail/" target="_blank">
        <i class="fa fa-facebook icon-spacing" style="font-size:36px; color:blue;"></i>
        </a>
        <a href="https://x.com/MetroRailKochi/" target="_blank">
        <i class="fa fa-twitter icon-spacing" style="font-size:36px;color:skyblue"></i>
        </a>
        <a href="https://www.linkedin.com/company/metrorailkochi/" target="_blank">
        <i class="fa fa-linkedin icon-spacing" style="font-size:36px;color:darkblue;"></i>
        </a>
        <a href="https://www.youtube.com/KochiMetroRail" target="_blank">
        <i class="fa fa-youtube icon-spacing" style="font-size:36px;color:red"></i>
        </a>
        <a href="https://www.instagram.com/kochimetrorail/" target="_blank">
        <i class="fa fa-instagram icon-spacing" style="font-size:36px;color:lightgreen"></i>
        </a>
        <i class="fa fa-phone icon-spacing" style="font-size:36px;color:green"></i>
        <span class="phone-number">0484-2846700- 09:30 am-5:00 pm</span><br>
        <span class="phone-number">1800 425 0355- Toll Free</span>
        <p>&copy; 2024 Kochi Metro Rail Ltd. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>