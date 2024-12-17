<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmrl";
$email = $_GET['studentemail'];
$conn = new mysqli($servername, $username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection Failed : ". $conn->connect_error);
}
$sql = "SELECT * FROM kmrlappform where studentemail = '".$email."' LIMIT 1";
$result = $conn->query($sql);
$values =$result->fetch_assoc();
$name = $values['name'];
$utrnumber = $values['utrnumber'];
$duration=$values['duration'];
$caste=$values['caste'];
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
    <h3 style="color: #4835d4;">Fee Details</h3>
                  <h5>For Students Except SC/ST: <pre>2-4weeks-Rs.1000+GST<br>5-8weeks-Rs.1500+GST<br>9-12weeks-Rs.2000+GST</h5>
                  <h5>For SC/ST or Physically challenged Students:<pre>2-4weeks-Rs.500+GST<br>5-8weeks-Rs.750+GST<br>9-12weeks-Rs.1000+GST</h5>
              
                  <h3 style="color: #4835d4;">Account Details</h3>
                  <h5><b>KMRL Account Number</b>:0803201002929</h5>
                  <h5><b>Bank Name</b>:Ernakulam Broadway Branch</h5>
                  <h5><b>IFS Code</b>:CNRB0000803</h5>
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      
          <div class="divider d-flex align-items-center my-4">
            <h3 class="text-center fw-bold mx-3 mb-0">Payment Details</h3>
          </div>
          <div data-mdb-input-init class="form-outline mb-4">
          <div class="d-flex flex-row align-items-center mb-3">
                <label for="payment"><b>Student Name: </b></label>
                  <p class="mb-0 me-2"><?php echo $name ?></p>
                </div>
          </div>
          <div data-mdb-input-init class="form-outline mb-3">
          <div class="d-flex flex-row align-items-center mb-3">
                <label for="payment"><b>Email:</b></label>
                <p class="mb-0 me-2"><?php echo $email ?></p>
            </div>
          </div>
          <div data-mdb-input-init class="form-outline mb-3">
          <div class="d-flex flex-row align-items-center mb-2">
                <label for="payment"><b>UTR Number:</b></label>
                <p class="mb-0 me-2"><?php echo $utrnumber ?></p>
            </div>
          </div>
          <div data-mdb-input-init class="form-outline mb-3">
          <div class="d-flex flex-row align-items-center mb-2">
                <label for="payment"><b>Duration:</b></label>
                <p class="mb-0 me-2"><?php echo $duration ?></p>
            </div>
          </div>
          <div data-mdb-input-init class="form-outline mb-3">
          <div class="d-flex flex-row align-items-center mb-2">
                <label for="payment"><b>Category:</b></label>
                <p class="mb-0 me-2"><?php echo $caste ?></p>
            </div>
          </div>
          <form method="post" action="validate1.php">
          <div class="text-center text-lg-start mt-4 pt-2">
          <center>
            <input type="hidden" name="email_value" value="<?php echo $email?>"/>
            <input type="submit" name="status" id="status" data-mdb-button-init data-mdb-ripple-init value="verified" class="btn btn-success btn-rounded btn-block btn-lg"><i
                class="far fa-clock me-2"></i> 
                <input type="submit" name="status" id="status" data-mdb-button-init data-mdb-ripple-init value="notverified" class="btn btn-success btn-rounded btn-block btn-lg"><i
                class="far fa-clock me-2"></i>
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