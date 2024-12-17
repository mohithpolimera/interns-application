<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmrl";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();
// Check if the user is logged in
if (!isset($_SESSION['loggedin3']) || $_SESSION['loggedin3'] !== true) {
    // If not logged in, redirect to the login page
    header("Location: index1.php");
    exit();
}
$email = $_GET["email_value"];
$sql="select name from kmrlform where email = '".$email."' LIMIT 1";
$result = $conn->query($sql);
$row =$result->fetch_assoc();
$name=$row['name'];
$sql1="select status from kmrlform where email = '".$email."' LIMIT 1";
$result1 = $conn->query($sql1);
$row1 =$result1->fetch_assoc(); 
// Your code for the block.php page goes here
// You might display a confirmation message or additional instructions
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
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://media.licdn.com/dms/image/D5612AQGz2WdXMYmLig/article-cover_image-shrink_720_1280/0/1696145728645?e=2147483647&v=beta&t=RaQdJs8U0ff837DehEaSLyIlXdVml6igJ89fqLaWZP4" style="max-width: 110%;" 
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
     
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Status Of Your Application</p>
          </div>
          <div data-mdb-input-init class="form-outline mb-4">
          <div class="row align-items-center py-3">
            <center>
               <h1><?php echo "Hello! $name"?></h1>
              <div class="col-md-9 pe-5">
                <?php  
                if($row1['status']=='accept')
                {
                    echo "Your Academic Details are verified Successfully.<br>";
                    echo "Now you can fill the Apllication form ";
                    ?>
                    <div class="px-5 py-4">
                    <center>
              <a href="app.php?xyz=1&email_value=<?php echo $email; ?>">click here for applicatoin form!!!! </a>
                </center>
                </div><?php
                }
                else if($row1['status']=='')
                {
                    echo "Your Academic details are under Verification.<br>";
                    echo " HR/KMRL will revert <br> Please wait.....";
                }
                else if($row1['status']=='reject')
                {
                    echo "Your Application is rejected by our HR";
                    echo "check if you have uploaded any wrong academic details then correct them and apply once again";
                }
                ?>
                 </center>
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