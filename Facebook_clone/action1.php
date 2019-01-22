<?php
session_start();
include('facebook.php');
$actionType = "";
if(isset($_POST['actionType'])){
$actionType = $_POST['actionType'];	
}

if($actionType == "Sign Up") {
$firstName = $_POST['firstName'];
$surName = $_POST['surName']; 
$email = $_POST['email'];
$password = $_POST['password'];
$date = $_POST['date'];
$Male = $_POST['Male'];
$Female = $_POST['Female'];
	//global $dbConnect;
	
	$query = $dbConnect->prepare("INSERT INTO fbdb (firstName,surName,email,password,date,Male,Female) VALUES (?, ?, ?, ?, ? , ?, ?)");
	$query->bindValue(1, $firstName);
	$query->bindValue(2, $surName);
	$query->bindValue(3, $email);
	$query->bindValue(4, $password);
	$query->bindValue(5, $date);
	$query->bindValue(6, $Male);
	$query->bindValue(7, $Female);
	try
	{
		$result = $query->execute();
		if($result == true){
				$_SESSION['email'] = $email;
				echo "<script>location.reload(true);</script>";
		} else {
			echo "failed";
		}
	} 
	catch(PDOException $e)
	{
		die($e->getMessage());
	}
}

if($actionType == "delete") {
	$email = $_POST['email'];
	//global $dbConnect;
	
	$query = $dbConnect->prepare("DELETE FROM fbdb WHERE email = ?");
	$query->bindValue(1, $email);
	
	try
	{
		$result = $query->execute();
		echo $result;
	} 
	catch(PDOException $e)
	{
		die($e->getMessage());
	}
}
if($actionType == "Log In") {
$emailorphone = $_POST['email'];
$password = $_POST['password']; 

	//global $dbConnect;
	
	$query = $dbConnect->prepare("SELECT * FROM fbdb WHERE email = ? AND password = ?");
	$query->bindValue(1, $email);
	$query->bindValue(2, $password);

	
	try
	{
		$result = $query->execute();
		if($result == true){
			echo "success";
		} else {
			echo "failed";
		}
	} 
	catch(PDOException $e)
	{
		die($e->getMessage());
	}
}
if($actionType == "logout") {
	unset($_SESSION['email']);
	echo "Processing";
	echo'<script>location.reload(true);</script>';
}
if($actionType == "delete") {
	$email = $_POST['email'];
	//global $dbConnect;
	
	$query = $dbConnect->prepare("DELETE FROM fbdb WHERE email = ?");
	$query->bindValue(1, $email);
	
	try
	{
		$result = $query->execute();
		echo $result;
	} 
	catch(PDOException $e)
	{
		die($e->getMessage());
	}
}
if($actionType == "fetch") {
	
	$query = $dbConnect->prepare("SELECT * FROM fbdb");
	 $query->execute();
	
	try
	{
		$results = $query->fetchAll();
		foreach($results as $result){
			echo $result['email']."<br/>";
		}
	} 
	catch(PDOException $e)
	{
		die($e->getMessage());
	}
}
?>

