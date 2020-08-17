<?php
include_once 'dbConnection.php';
ob_start();
$name     = $_POST['name'];
$name     = ucwords(strtolower($name));
$phone     = $_POST['phone'];
$name     = stripslashes($name);
$name     = addslashes($name);
$name     = ucwords(strtolower($name));
$phone = stripslashes($phone);
$phone = addslashes($phone);


$q3 = mysqli_query($con, "INSERT INTO user VALUES  (NULL,'$name', '$phone')");
if ($q3) {
    session_start();
    $_SESSION["phone"] = $phone;
    $_SESSION["name"]     = $name;
    
     echo "<script>window.open('index.php','_self');</script>";
} else {
    header("location:index.php?q7=Username or number exists. Please choose another&name=$name&phno=$phone");
}
ob_end_flush();
?>