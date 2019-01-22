<?php
$host = 'localhost';
// MySQL Database Name
$dbname = 'facebook1';
// MySQL Database User
$dbuser = 'fbkumar';
// MySQL Database Password
$dbpass = '123456';
$dbConnect = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $dbuser, $dbpass);
$dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>