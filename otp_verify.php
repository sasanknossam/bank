<?php
session_start();

if(isset($_POST['verify']))
{
    $entered_otp = $_POST['otp'];

    if($entered_otp == $_SESSION['otp'])
    {
        header("Location: cust_regfrm_confirm.php");
    }
    else
    {
        echo "Invalid OTP. Please try again.";
    }
}
?>

<html>
<head>
<title>OTP Verification</title>
</head>

<body>

<h3>Enter OTP sent to your Email</h3>

<form method="post">

<input type="text" name="otp" placeholder="Enter OTP" required>

<br><br>

<input type="submit" name="verify" value="Verify OTP">

</form>

</body>
</html>