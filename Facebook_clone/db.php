<?php
$host = 'localhost';
// MySQL Database Name
$dbname = 'facebook';
// MySQL Database User
$dbuser = 'fbadmin';
// MySQL Database Password
$dbpass = '123456';
$dbConnect = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $dbuser, $dbpass);
$dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>