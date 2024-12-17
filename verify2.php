<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmrl";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email=$_POST['email'];
$sql = "SELECT * FROM kmrlform where email = '".$email."' LIMIT 1";
$result = $conn->query($sql);
$values=$result->fetch_assoc();
if(isset($_POST['submit']))
{
    $otp=$_POST['otp'];
    if($values['otp']==$otp)
    {
        ?>
        <script>
        window.location.href="forgot.php?email=<?php echo $email ?>";
        </script>
        <?php
    }
    else{
        alert1("Incorrect OTP,Please enter the correct OTP.");
        ?>
        <script>
        window.location.href="verify1.php?xyz=1&email=<?php echo $email ?>";
        </script>
        <?php
    }
}
function alert1($message) { 
    echo "<script>alert('$message');</script>"; 
  }
?>