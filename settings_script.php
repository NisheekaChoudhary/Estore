<?php

require "includes/common.php";
if (!isset($_SESSION['email'])) { 
  header('location: index.php'); 
} 

$password = mysqli_real_escape_string($con, $_POST['oldpassword']);
$password = md5($password);

$newpassword = mysqli_real_escape_string($con, $_POST['newpassword']);
$newpassword = md5($newpassword);

$retypenewpassword = mysqli_real_escape_string($con, $_POST['retypenewpassword']);
$retypenewpassword = md5($retypenewpassword);

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if ($newpassword != $retypenewpassword) {
    header('location: settings.php?error=The two passwords don\'t match');
} else {
    if ($password == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $newpassword . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=Password Updated');
    } else
        header('location: settings.php?error=Wrong Old Password');
}
?>


