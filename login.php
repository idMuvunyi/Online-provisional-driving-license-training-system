<?php
session_start();
if (isset($_SESSION["phone"])) {
    session_destroy();
}

include_once 'dbConnection.php';
$ref      = @$_GET['q'];
$phone = $_POST['phone'];

$phone = stripslashes($phone);
$phone = addslashes($phone);
$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);
$result = mysqli_query($con, "SELECT name FROM user WHERE phone = '$phone' ") or die('Error');
$count = mysqli_num_rows($result);
if ($count == 1) {
    while ($row = mysqli_fetch_array($result)) {
        $name = $row['name'];
    }
    $_SESSION["name"]     = $name;
    $_SESSION["phone"] = $phone;
    header("location:account.php?q=1");
} else
    header("location:$ref?w=Nomero Ntago Ariyo ");


?>