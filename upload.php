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
$email = "";
if(isset($_POST['submit']))
{
    $email =$_POST['email'];
    $password =$_POST['password'];
    $hashed_password = md5($password);
} 
$sql = "SELECT * FROM kmrlform where email = '".$email."' LIMIT 1";
$result = $conn->query($sql);
$row =$result->fetch_assoc();
if($hashed_password==$row['password'])
{ 
    if($row['role']=='hr')
    {
      $_SESSION['loggedin'] = true;
      ?>
      <script>
      window.location.href='hr.php';
      </script>
      <?php
    }
    else if($row['role']=='finance')
    {
      $_SESSION['loggedin1'] = true;
      ?>
      <script>
      window.location.href='finance1.php';
      </script>
      <?php
    }
    else if($row['role']=='admin')
    {
      $_SESSION['loggedin2'] = true;
      ?>
      <script>
      window.location.href='admin.php';
      </script>
      <?php
    }
    else if($row['count']==1)
    {
      $_SESSION['loggedin3'] = true;
      ?>
      <script>
      window.location.href='app.php?email_value=<?php echo $email?>';
      </script>
      <?php
    }
    else if($row['count']==2)
    {
      $_SESSION['loggedin3'] = true;
      ?>
      <script>
      window.location.href='block1.php?email_value=<?php echo $email?>';
      </script>
      <?php
    }
    else
    {
      $_SESSION['loggedin3'] = true;
    }
} 
else
{
    alert("Invalid Email Id/Password");
    ?>
        <script>
        window.location.href='index1.php';
        </script>
    <?php
}
function alert($message) { 
	echo "<script>alert('$message');</script>"; 
}
// Check if the user is logged in
if (!isset($_SESSION['loggedin3']) || $_SESSION['loggedin3'] !== true) {
    // If not logged in, redirect to the login page
    header("Location: index1.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Website</title>
    <link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style1.css">
<style>
        .error-message {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<section class="vh-100">
  <div class="container-fluid h-custom ">
    <div class="row d-flex justify-content-center align-items-center h-100 ">
    <div class="col-md-9 col-lg-8 col-xl-5">
    <h4 class="text-center fw-bold mx-3 mb-0">Procedure to Apply</h4><br>
    <p style="text-align:justify;">The general procedure for applying for Internship in Kochi Metro Rail Ltd. are as below:<br>
<b>Step 1:</b>
Request Letter from Student (on College/ Institute Letterhead)/ Email from the office of Training & 
Placement cell of the college should be sent to HR Department of KMRL mentioned with details of the 
student/s, field of study, duration etc.<br>
<b>Step 2:</b>
On receipt of letter/e mail from Student/ College, the concerned Officer of HR, KMRL shall confirm the 
Internship slots via Confirmation Letter/ Email to the College/Institution.<br>
<b>Step 3:</b>
Only after receiving confirmation letter, student/s can make the required payment towards Internship 
fees (as mentioned in the letter) before the start date of the Internship Training. The details of the bank 
and payment procedure etc will be mentioned in the confirmation letter.<br>
<b>Step 4:</b>
Students to report on the specified date/ day (as per confirmation letter) along with the provisional letter, 
proof of payment, print of college ID and caste certificate, as per requirement.<br>
<b>Step 5:</b>
On completion of Training, Students need to submit a training / project/ internship report to HR and HR 
shall subsequently issue the Internship Completion certificate to the student.

            </p>
      </div>
      <div class="col-md-10 col-lg-6 col-xl-6 offset-xl-1">
      <form method="post" id="dateForm" action="app.php" enctype="multipart/form-data">
          <div class="divider d-flex align-items-center my-4">
            <h4 class="text-center fw-bold mx-3 mb-0">Upload Academic Credentials</h4>
          </div>
          <div data-mdb-input-init class="form-outline mb-3">
          
          <div data-mdb-input-init class="form-outline mb-3">
          <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">College Letter:</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type="hidden" name="email_value" value="<?php echo $email?>"/>
                <input   class="form-control form-control-lg" name="collegeletter" id="formFileLg" type="file" required/>
                <div class="small text-muted mt-2">Only pdf format is allowed. Max file
                  size 1 MB</div>
                <a href="sample.pdf">click here for sample document!!</a>
              </div>
          </div>
          <div data-mdb-input-init class="form-outline mb-3">
          <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Resume/CV: </h6>
              </div>
              <div class="col-md-9 pe-5">
                <input class="form-control form-control-lg"  name="cvname" id="formFileLg" type="file" required/>
                <div class="small text-muted mt-2">Only pdf format is allowed. Max file
                  size 1 MB</div>
              </div>
          </div>
          <div data-mdb-input-init class="form-outline mb-3">
          <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Image: </h6>
              </div>
              <div class="col-md-9 pe-5">
                <input class="form-control form-control-lg"  name="image" id="formFileLg" type="file" required/>
                <div class="small text-muted mt-2">Only jpg or jpeg or png formats allowed. Max file
                  size 100 kb</div>
              </div>
          </div>
          <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Stream: </h6>
              </div>
              <div class="col-md-9 pe-5">
                <input class="form-control form-control-lg"  name="stream" id="formFileLg" type="text" placeholder="Stream" required/>
              </div>
          </div>
          <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Duration: </h6>
              </div>
              <div class="col-md-9 pe-5">
              <select name="duration" id="duration" class="form-control form-control-lg" required>
                <option value="4">4 Weeks</option>
                <option value="8">8 Weeks</option>
                <option value="12">12 Weeks</option>
            </select>
          </div>
          </div>
          <br>
       
          <div class="date-input-container">
    <div class="date-input-group">
        <label class="form-label" for="fromDate"><h6 class="mb-0">From: </h6></label>
        <input type="date" id="fromDate" name="fromdate">
    </div>
    <div class="date-input-group">
        <label class="form-label" for="toDate"><h6 class="mb-0">To: </h6></label>
        <input type="date" id="toDate" name="todate">
    </div>
</div>

          <div class="row align-items-center py-3">
            
                <h6 class="mb-0">Area of Internship: </h6>
              </div>

              <div class="col-md-9 pe-5">
          
<select name="area" id="area" >
  <option value="it">IT</option>
  <option value="finance">Finance</option>
  <option value="electrical">Electrical</option>
  <option value="procurement">Procurement</option>
  <option value="structural">Structural</option>
  <option value="mechanical">Mechanical</option>
  <option value="civil">Civil</option>
  <option value="others">Others</option>
</select>
              </div>
          </div>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
          <div class="d-flex justify-content-between align-items-center">
    <div class="form-check mb-0">
        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg">
        <label class="form-check-label" for="form2Example3cg" align="right">
            I have gone through all the <a href="https://kochimetro.org/careers/site_media/news/Guidelines_Internship.pdf" class="text-body"><u>Guidelines of internship</u></a>
        </label>
    </div>
</div>
          <div class="text-center text-lg-start mt-4 pt-2">
          <center>
          <div class="error-message" id="errorMessage"></div>
          <input  align="center" type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" value="Submit"/>
</center>
          </div>
        </form>
        <script>
        $(document).ready(function() {
            // Set today's date for the minimum date constraints
            var today = new Date().toISOString().split('T')[0];
            $('#fromDate').attr('min', today);
            $('#toDate').attr('min', today);

            // Form submission handler
            $('#dateForm').on('submit', function(event) {
                var fromDate = new Date($('#fromDate').val());
                var toDate = new Date($('#toDate').val());
                var duration = parseInt($('#duration').val());
                var errorMessage = '';

                // Validate if the "From" date is in the past
                if (fromDate < new Date(today)) {
                    errorMessage = 'The From date cannot be in the past.';
                }

                // Validate if the "To" date is in the past
                if (toDate < new Date(today)) {
                    errorMessage = 'The To date cannot be in the past.';
                }

                // Check if the dates are valid
                if (isNaN(fromDate) || isNaN(toDate)) {
                    errorMessage = 'Please enter valid dates.';
                }

                // Calculate the difference in days
                var differenceInTime = toDate - fromDate;
                var differenceInDays = differenceInTime / (1000 * 3600 * 24);

                // Validate the difference based on the selected duration
                if (differenceInDays > duration * 7) {
                    errorMessage = " The duration must be less than or equal to number of weeks entered.";
                }

                if (errorMessage) {
                    $('#errorMessage').text(errorMessage);
                    event.preventDefault();
                } else {
                    $('#errorMessage').text('');
                }
            });
        });
    </script>
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
    <div class="footer" width:100%   flex-wrap: wrap;>
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<footer>
  
        <ul class="footer-links"  >
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
    .footer {
    margin-top: 450px; /* Adjust as needed to push the container down */
    width: 100%; /* Make the container span the full width of the page */
    border: 1px solid #ccc; /* Add a border for visual separation */
    padding: 1px; /* Add padding inside the container */
    box-sizing: border-box; /* Include padding and border in the width */
    background-color: #f9f9f9; /* Optional: Add a background color for visibility */
}

.clearfix::after {
    content: "";
    display: table;
    clear: both;
}
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.date-input-container {
            display: flex;
            justify-content: center; /* Horizontally center the items */
            align-items: center; /* Vertically center the items */
        }

        .date-input-group {
            display: flex; /* Use flexbox for each input group */
            align-items: center; /* Vertically center items within each group */
            margin-right: 20px; /* Adjust spacing between date input groups */
        }

        .date-input-group label {
            margin-right: 10px; /* Adjust spacing between label and input */
            text-align: center; /* Align label text to the right */
            min-width: 80px; /* Ensure consistent width for labels */
        }

        .date-input-group input[type="date"] {
            width: 150px; /* Adjust input width as needed */
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
    </div>
    </footer>
    </body>
    </html>