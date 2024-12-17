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
if (!isset($_SESSION['loggedin1']) || $_SESSION['loggedin1'] !== true) {
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
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <style>
        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
        }
        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }
        .pagination a:hover:not(.active) {background-color: #ddd;}
    </style>
</head>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-9 offset-xl-1">
          <div class="divider d-flex align-items-center my-4">
            <h3 class="text-center fw-bold mx-3 mb-0">Financial Details</h3>
          </div>
          <div data-mdb-input-init class="form-outline mb-4">
          <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Verified</a></li>
            <li><a href="#tabs-2">Pending</a></li>
            <li><a href="#tabs-3">Denied</a></li>
        </ul>
        <div class="content_box">
            <div id="tabs-1">
                <h3>Verified Students List</h3>
                <br>
                <p>
                <?php
                $sql = "SELECT COUNT(*) AS total FROM kmrlappform where status='verified'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $total_records = $row['total'];
                $limit = 5;
                if (isset($_GET["page"])) {
                    $page  = $_GET["page"];
                } else {
                    $page = 1;
                }
                $start_from = ($page - 1) * $limit;
                $total_pages = ceil($total_records / $limit);
            $sql = "SELECT name,studentemail,status FROM kmrlappform where status='verified' LIMIT $start_from, $limit";
            $result = $conn->query($sql);
            $html = "<table class='paging_table' border='1'>";
            while($row =$result->fetch_assoc() ){
                $html .="<tr>";
                $em = "";
                foreach($row as $key => $val)
                {
                    $html .= " <th>".$key."</th>";
                }
                $html .="</tr>";
                $html .="<tr>";
                foreach($row as $key => $val){
                    $em = $row['studentemail'];
                $html .= " <td>".$val."</td>";
                }
                $html .="<td><a href='finance.php?studentemail=".$em."'>View fee Details</a></td></tr>";
                break;
            }
            while($row =$result->fetch_assoc() ){
                $html .="<tr>";
                $em = "";
                foreach($row as $key => $val){
                    $em = $row['studentemail'];
                $html .= " <td>".$val."</td>";
                }
                $html .="<td><a href='finance.php?studentemail=".$em."'>View fee Details</a></td></tr>";
                }
            $html .= "</table>";
            echo $html;
            ?>
            <div class="pagination">
        <?php
        for ($i = 1; $i <= $total_pages; $i++) {
            echo "<a href='finance1.php?page=" . $i . "'>" . $i . "</a> ";
        }
        ?>
    </div>
                </p>
            </div>

            <div  id="tabs-2">
                <h3>Pending Students List</h3>
                <br>
                <p>
                <?php
                $sql = "SELECT COUNT(*) AS total FROM kmrlappform where status=''";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $total_records = $row['total'];
                $limit = 5;
                if (isset($_GET["page"])) {
                    $page  = $_GET["page"];
                } else {
                    $page = 1;
                }
                $start_from = ($page - 1) * $limit;
                $total_pages = ceil($total_records / $limit);
            $sql = "SELECT name,studentemail,status FROM kmrlappform where status='' LIMIT $start_from, $limit";
            $result = $conn->query($sql);
            $html = "<table class='paging_table' border='1'>";
            while($row =$result->fetch_assoc() ){
                $html .="<tr>";
                $em = "";
                foreach($row as $key => $val)
                {  
                    $html .= " <th>".$key."</th>";
                }
                $html .="</tr>";
                $html .="<tr>";
                foreach($row as $key => $val){
                    $em = $row['studentemail'];
                $html .= " <td>".$val."</td>";
                }
                $html .="<td><a href='finance.php?studentemail=".$em."'>View fee Details</a></td></tr>";
                break;
            }
            while($row =$result->fetch_assoc() ){
                $html .="<tr>";
                $em = "";
                foreach($row as $key => $val){
                    $em = $row['studentemail'];
                $html .= " <td>".$val."</td>";
                }
                $html .="<td><a href='finance.php?studentemail=".$em."'>View fee Details</a></td></tr>";
                }
            $html .= "</table>";
            echo $html;
            ?>
            <div class="pagination">
        <?php
        for ($i = 1; $i <= $total_pages; $i++) {
            echo "<a href='finance1.php?page=" . $i . "'>" . $i . "</a> ";
        }
        ?>
    </div>
                </p>
            </div>

            <div  id="tabs-3">
                <h3>Denied Students List</h3>
                <br>
                <p>
                <?php
                $sql = "SELECT COUNT(*) AS total FROM kmrlappform where status='notverified'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $total_records = $row['total'];
                $limit = 5;
                if (isset($_GET["page"])) {
                    $page  = $_GET["page"];
                } else {
                    $page = 1;
                }
                $start_from = ($page - 1) * $limit;
                $total_pages = ceil($total_records / $limit);
            $sql = "SELECT name,studentemail,status FROM kmrlappform where status='notverified' LIMIT $start_from, $limit";
            $result = $conn->query($sql);
            $html = "<table class='paging_table' border='1'>";
            while($row =$result->fetch_assoc() ){
                $html .="<tr>";
                $em = "";
                foreach($row as $key => $val)
                {  
                    $html .= " <th>".$key."</th>";
                }
                $html .="</tr>";
                $html .="<tr>";
                foreach($row as $key => $val){
                    $em = $row['studentemail'];
                $html .= " <td>".$val."</td>";
                }
                $html .="<td><a href='finance.php?studentemail=".$em."'>View fee Details</a></td></tr>";
                break;
            }
            while($row =$result->fetch_assoc() ){
                $html .="<tr>";
                $em = "";
                foreach($row as $key => $val){
                    $em = $row['studentemail'];
                $html .= " <td>".$val."</td>";
                }
                $html .="<td><a href='finance.php?studentemail=".$em."'>View fee Details</a></td></tr>";
                }
            $html .= "</table>";
            echo $html;
            ?>
            <div class="pagination">
        <?php
        for ($i = 1; $i <= $total_pages; $i++) {
            echo "<a href='finance1.php?page=" . $i . "'>" . $i . "</a> ";
        }
        ?>
    </div>
                </p>
            </div>
        </div>
    </div>
          </div>
      </div>
    </div>
  </div>
  <script> 
  $( function() {
    $( "#tabs" ).tabs(
        {
            event:"mouseover"
        }
    );
  } );
  </script>
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