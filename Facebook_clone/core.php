<?php
include('db.php');

function userRegistration($fullName, $emailAddress, $mobile, $gender, $password, $dob) {
	global $dbConnect;
	$query = $dbConnect->prepare("INSERT INTO users (fullName, emailAddress, mobile, gender, password, dob) VALUES (?, ?, ?, ?, ?, ?)");
	$query->bindValue(1, $fullName);
	$query->bindValue(2, $emailAddress);
	$query->bindValue(3, $mobile);
	$query->bindValue(4, $gender);
	$query->bindValue(5, $password);
	$query->bindValue(6, $dob);
	
	try
	{
		$result = $query->execute();
		return $result;
	} 
	catch(PDOException $e)
	{
		die($e->getMessage());
	}
}

function checkUserEmail($emailAddress) {
	global $dbConnect;
	$query = $dbConnect->prepare("SELECT * FROM users WHERE emailAddress = ?");
	$query->bindValue(1, $emailAddress);
	$query->execute();
	try
	{
		$result = $query->rowCount();
		return $result;
	} 
	catch(PDOException $e)
	{
		die($e->getMessage());
	}
}

function checkUserMobile($mobile) {
	global $dbConnect;
	$query = $dbConnect->prepare("SELECT * FROM users WHERE mobile = ?");
	$query->bindValue(1, $mobile);
	$query->execute();
	try
	{
		$result = $query->rowCount();
		return $result;
	} 
	catch(PDOException $e)
	{
		die($e->getMessage());
	}
}

function listAllUsersDetails() {
	global $dbConnect;
	$query = $dbConnect->prepare("SELECT * FROM users");
	$query->execute();
	try
	{
		$result = $query->fetchAll();
		return $result;
	} 
	catch(PDOException $e)
	{
		die($e->getMessage());
	}
}

function userLogin() {
	
}

function forgotPassword() {
	
}
?>