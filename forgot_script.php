<?php

require("includes/common.php");

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

$query = "SELECT email FROM users WHERE email ='" . $email . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_email = $row['email'];

    if ($email == $orig_email) {
        header('location: forgot.php?error= OTP has been sent to your registered E-mail ID');
    } else
        header('location: forgot.php?error= You are not a registered User');

