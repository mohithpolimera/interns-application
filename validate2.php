<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmrl";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//print_R($_POST);
$email = $_GET['email'];
    $sql = "DELETE FROM kmrlform WHERE email = '".$email."' LIMIT 1";
    $result = $conn->query($sql);
    if($result == 1){
        ?>
        <script>
        window.location.href='admin.php';
        </script>
    <?php
    }
?>