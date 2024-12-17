<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmrl";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
  $email=$_POST['email'];
$x=$_POST['oldpassword'];
$y=$_POST['newpassword'];
$sql1="SELECT password FROM kmrlform where email = '".$email."' LIMIT 1";
$result1 = $conn->query($sql1);
$values1 =$result1->fetch_assoc();
$password=$values1['password'];
if($x==$password)
    {
$sql = "UPDATE kmrlform SET password='$y' WHERE email = '".$email."' LIMIT 1";
$result = $conn->query($sql);
if($result==1)
{
  ?>
  <script>
        window.location.href='index1.php';
        </script>
        <?php
}
    }
}
$conn->close();
?>