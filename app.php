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
session_start();
// Check if the user is logged in
if (!isset($_SESSION['loggedin3']) || $_SESSION['loggedin3'] !== true) {
    // If not logged in, redirect to the login page
    header("Location: index1.php");
    exit();
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
        $mail->Body = '<h1>Your Academic Details are Submitted Successfully</h1>Please Wait until the Details are verified by our HR<br>For any Queries Contact toll free-1800 425 0355<br>We wish you a happy internship<br><br>*** Please do not reply.This is an auto-generated mail ***<br><br>Best Wishes,<br>HR,<br>
Kochi Metro Rail Limited,<br>
4th Floor,<br> JLN Metro Station,<br>
Kaloor,<br> Kochi-682018.';
        $mail->send();
        echo '';
    } catch (Exception $e) {
        echo "";
    }
}
//$email = $_POST['email_value'];
$email =isset($_POST['email_value']) ?$_POST['email_value'] :$_GET['email_value'];
$xyz = 0;
$xyz =  isset($_GET['xyz']) ? $_GET['xyz'] : 0;
if($xyz == 1 ){
?>
<!DOCTYPE html>
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
                <form action="logout.php" method="post">
                <button align="right" type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
    name="submit">Logout</button>
</form>
            </ul>
        </nav>
    </header>
    <!-- Main Content -->
    <main>
    <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style1.css">
</head>
          <div class="divider d-flex align-items-center my-4">
            <h3 class="text-center fw-bold mx-3 mb-0">Application Form</h3>
          </div>
          <section class="h-100 h-custom gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #4835d4;">Student Details</h3>
                  <form action="apptablevalues.php" method="post" enctype="multipart/form-data"> 
                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" name="name" id="form3Examplev2" class="form-control form-control-lg" placeholder="Name" pattern="[a-zA-Z , - ]{3,}" title="Minimum 3 letters" required/>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" name="collegerollno" id="form3Examplev3" class="form-control form-control-lg" placeholder="College Roll No"  pattern="[a-zA-Z -   , 0-9]{2,}" title="Minimum 2 characters" required/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" name="course" id="form3Examplev2" class="form-control form-control-lg" placeholder="Course" pattern="[a-z A-Z]{3,}" title="Minimum 3 letters" required/>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" name="branch" id="form3Examplev3" class="form-control form-control-lg" placeholder="Branch/Specialization" pattern="[a-z A-Z 0-9]{2,}" title="Minimum 2 characters" required/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" name="year" id="form3Examplev2" class="form-control form-control-lg" placeholder="Year/Semester" pattern="[0-9]{1,}" title="Minimum 1 numbers" required/>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" name="studentmobileno" id="form3Examplev3" class="form-control form-control-lg" placeholder="Mobile" pattern="[0-9]{10,}" title="Minimum 10 numbers" required/>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="mb-4 pb-2">
                <input type="textarea" name="permanentaddress" class="form-control form-control-lg" id="form3Examplev2" placeholder="Permanent Address" pattern="[a-z - A-Z 0-9]{2,}" title="Minimum 2 characters" required>
</div>
                </div>
                <div class="form-group">
                  <div class="mb-4 pb-2">
                <input type="textarea" name="localaddress" class="form-control form-control-lg" id="form3Examplev2" placeholder="Local Address" pattern="[a-z - A-Z 0-9]{2,}" title="Minimum 2 characters" required>
</div>
                </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline">
                        <input type="email" name="studentemail" id="form3Examplev2" class="form-control form-control-lg" placeholder="Email Id" required/>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline">
                      <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" value="SC/ST" id="customRadioInline1" name="caste" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1">SC/ST</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" value="Others" id="customRadioInline2" name="caste" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline2" >Others</label>
</div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="mb-4 pb-2">
                <input type="text" name="duration" class="form-control form-control-lg" id="form3Examplev2" placeholder="Training requested for duration(no.of weeks)" pattern="[0-9]{1,}" title="Minimum 1 numbers" required>
</div>
                </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline">
                      <label class="form-label" for="form3Examplev3" style="color:#4835d4;">From:</label>
                        <input type="date" data-date-format="DD MMMM YYYY" name="fromdate" id="form3Examplev2" class="form-control form-control-lg" placeholder="From Date" required/>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline">
                      <label class="form-label" for="form3Examplev3" style="color:#4835d4;">To:</label>
                        <input type="date" data-date-format="DD MMMM YYYY" name="todate" id="fośrm3Examplev3" class="form-control form-control-lg" placeholder="To Date" required/>
                      </div>
                    </div>
                  </div>
                  <h3 style="color: #4835d4;">Fee Details</h3>
                  <h5>For Students Except SC/ST: 2-4weeks-Rs.1000+GST,5-8weeks-Rs.1500+GST,9-12weeks-Rs.2000+GST</h5>
                  <h5>For SC/ST or Physically challenged Students: 2-4weeks-Rs.500+GST,5-8weeks-Rs.750+GST,9-12weeks-Rs.1000+GST</h5>
                  <br>
                  <h3 style="color: #4835d4;">Account Details</h3>
                  <h5>KMRL Account Number:0803201002929</h5>
                  <h5>Bank Name:Ernakulam Broadway Branch</h5>
                  <h5>IFS Code:CNRB0000803</h5>
                </div>
              </div>
              <div class="col-lg-6 bg-indigo text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color:#4835d4;">College Details</h3>
                  <div class="mb-4 pb-2">
                    <div data-mdb-input-init class="form-outline form-white">
                      <input type="textarea" name="collegename" id="form3Examplea2" class="form-control form-control-lg" placeholder="Name and Address of College" pattern="[a-z A-Z - 0-9]{2,}" title="Minimum 2 characters" required/>
                    </div>
                  </div>
                  <div class="mb-4 pb-2">
                    <div data-mdb-input-init class="form-outline form-white">
                      <input type="text" name="collegecoordinator" id="form3Examplea3" class="form-control form-control-lg" placeholder="Name of College Coordinator" pattern="[a-zA-Z]{3,}" title="Minimum 3 letters" required/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline form-white">
                        <input type="email" name="collegeemail" id="form3Examplea4" class="form-control form-control-lg" placeholder="Email" required/>
                      </div>
                    </div>
                    <div class="col-md-7 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline form-white">
                        <input type="text" name="collegecontactnumber" id="form3Examplea5" class="form-control form-control-lg" placeholder="Contact Number" pattern="[0-9]{10,}" title="Minimum 10 numbers" required/>
                      </div>
                    </div>
                  </div>
                  <h3 class="fw-normal mb-5" style="color:#4835d4;">Payment Details</h3>
                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline form-white">
                        <input type="date" data-date-format="DD MMMM YYYY" name="paymentdate" id="form3Examplea7" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form3Examplea7" style="color:#4835d4;">Date</label>
                      </div>
                    </div>
                    <div class="col-md-7 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline form-white">
                        <input type="text" name="utrnumber" id="form3Examplea8" class="form-control form-control-lg" placeholder="UTR Number" pattern="[a-zA-Z0-9]{2,}" title="Minimum 2 characters" required/>
                      </div>
                    </div>
                  </div>
                  <h4 class="fw-normal mb-5" style="color:#4835d4;">If Ward of KMRL Employee(Serving/Retired..)</h4>
                  <div class="row">
                    <div class="col-md-7 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline form-white">
                        <input type="text" name="empname" id="form3Examplea7" class="form-control form-control-lg" placeholder="Father/Mother Name" pattern="[a-zA-Z]{3,}" title="Minimum 3 letters"/>
                      </div>
                    </div>
                    <div class="col-md-5 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline form-white">
                        <input type="text" name="designation" id="form3Examplea8" class="form-control form-control-lg" placeholder="Designation" pattern="[a-zA-Z0-9]{2,}" title="Minimum 2 characters"/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-7 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline form-white">
                        <input type="text" name="empnumber" id="form3Examplea7" class="form-control form-control-lg" placeholder="Employee Number" pattern="[a-zA-Z0-9]{2,}" title="Minimum 2 characters"/>
                      </div>
                    </div>
                    <div class="col-md-5 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline form-white">
                        <input type="text" name="department" id="form3Examplea8" class="form-control form-control-lg" placeholder="Department" pattern="[a-zA-Z0-9]{2,}" title="Minimum 2 characters"/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline form-white">
                        <input type="text" name="empphonenumber" id="form3Examplea7" class="form-control form-control-lg" placeholder="Phone Number" pattern="[0-9]{10,}" title="Minimum 10 numbers"/>
                      </div>
                    </div>
                    <div class="col-md-7 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline form-white">
                        <input type="file" name="empsignature" id="form3Examplea8" class="form-control form-control-lg" placeholder="Signature"/>
                        <label class="form-label" for="form3Examplea7" style="color:#4835d4;">Signature</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-7 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline form-white">
                        <input type="text" name="place" id="form3Examplea7" class="form-control form-control-lg" placeholder="Place" pattern="[a-zA-Z0-9]{2,}" title="Minimum 2 characters" required/>
                      </div>
                    </div>
                    <div class="col-md-5 mb-4 pb-2">
                      <div data-mdb-input-init class="form-outline form-white">
                        <input type="date" data-date-format="DD MMMM YYYY" name="date" id="form3Examplea8" class="form-control form-control-lg" placeholder="Date" required/>
                        <label class="form-label" for="form3Examplea7" style="color:#4835d4;">Date</label>
                      </div>
                    </div>
                  </div>
                  <div class="mb-4 pb-2">
                    <div data-mdb-input-init class="form-outline form-white">
                      <input type="file" name="studentsignature" id="form3Examplea2" class="form-control form-control-lg" placeholder="Signature of Student" required/>
                      <label class="form-label" for="form3Examplea7" style="color:#4835d4;">Signature of Student</label>
                    </div>
                  </div>
                  <div class="form-check d-flex justify-content-start mb-4 pb-3">
                    <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" required/>
                    <label class="form-check-label text-black" for="form2Example3" style="color:#4835d4;">
                      I do accept the <a href="https://kochimetro.org/careers/site_media/news/Guidelines_Internship.pdf" class="text-black"><u>Terms and Conditions</u></a> of your
                      Internship.
                    </label>
                  </div>
<center>
                  <input type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg"
                  style="color:#4835d4;" data-mdb-ripple-color="dark" placeholder="Register">
</center>
</form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        <!-- Your main content goes here -->
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
<?php
}
$collegeletter="";
if(isset($_POST['submit']))
{
  print_R($_POST);
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
$file_name = time().'_'.basename($_FILES["image"]["name"]);
$target_file = $target_dir . $file_name;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
// Check file size
if ($_FILES["image"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}
$image=$file_name;
$stream=$_POST['stream'];
$duration=$_POST['duration'];
$fromdate=$_POST['startDate'];
$todate=$_POST['endDate'];
$area=$_POST['area'];
  $sql="insert into academic(email,cvname,collegeletter,image,stream,duration,fromdate,todate,area) values('$email','$cvname','$collegeletter','$image','$stream','$duration','$fromdate','$todate','$area')";
  $result = $conn->query($sql);
  if($result == 1) {  
      //here i have to perform if and else in if diplay the message and app form in else wait untill msg
      $sql1="Update kmrlform set count='1' where email = '".$email."' LIMIT 1";
      $result1 = $conn->query($sql1);
      sendEmail($email);
    }
}
header('Location: block.php?email_value='.$email);
$conn->close();
?>