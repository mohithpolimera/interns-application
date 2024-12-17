<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmrl";
$email = $_POST['email_value'];
$conn = new mysqli($servername, $username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection Failed : ". $conn->connect_error);
}
if(isset($_POST['submit']))
{
    $password=$_POST['password'];
    $hashed_password = md5($password);
    $confirmpassword=$_POST['confirmpassword'];
    if($password==$confirmpassword){
    $sql="Update kmrlform set password='".$hashed_password."' where email = '".$email."' ";
    $result = $conn->query($sql);
    if($result == 1){
        alert1("Password updated successfully");
        ?>
        <script>
        window.location.href='index1.php';
        </script>
    <?php
    }
    }
    else{
            alert1("The password and confirm passwords entered are not matched.");
            ?>
            <script>
                window.location.href='forgot.php';
            </script>
        <?php
    }
}
function alert1($message) { 
    echo "<script>alert('$message');</script>"; 
  }
?>