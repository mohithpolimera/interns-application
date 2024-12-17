<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmrl";
$email = $_GET['email'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM kmrlform where email = '".$email."' LIMIT 1";
$result = $conn->query($sql);
$values =$result->fetch_assoc();
$name = $values['name'];
$email = $values['email'];
$phonenumber = $values['phonenumber'];
$institution = $values['institution'];
$course = $values['course'];
$status = $values['status'];
$sql1 = "SELECT * FROM academic where email = '".$email."' LIMIT 1";
$result1 = $conn->query($sql1);
$values1 =$result1->fetch_assoc();
$image='doc/'.$values1['image'];
$cvname='doc/'.$values1['cvname'];
$collegeletter='doc/'.$values1['collegeletter'];
?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 </head>
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

 <section style="background-color: #eee;">
  <div class="container py-10">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="http://localhost/kmrl_project/hr.php">Home</a></li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="<?php echo $image ?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 350px;">
            <h5 class="my-3"><?php echo $name ?></h5>
            <form action="validate.php" method="post">
            <div class="d-flex justify-content-center mb-2">
            <input type="hidden" name="email_value" value="<?php echo $email?>"/>
              <input  type="submit" name="status" id="status" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary" value="accept"/>
              <input  type="submit" name="status" id="status" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary ms-1" value="reject"/>
            </div>
</form>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
           
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $name ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email:</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $email ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone:</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $phonenumber ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Course:</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $course ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Institution:</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $institution ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Cv of student</span>
                </p>
                <p class="mb-1" style="font-size: .77rem;"><a href="<?php echo $cvname ?>">View cv</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">CollegeLetter of Student:</span> 
                </p>
                <p class="mb-1" style="font-size: .77rem;"><a href="<?php echo $collegeletter ?>">View CollegeLetter</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
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