<?php
include('core.php');
if(isset($_POST['actionType'])) {
	$actionType = $_POST['actionType'];
	$response = array();
	if($actionType == "userRegistration") {
		$fullName = $_POST['fullName'];
		$emailAddress = $_POST['emailAddress'];
		$mobile = $_POST['mobile'];
		$gender = $_POST['gender'];
		$password = $_POST['password'];
		$dob = $_POST['dob'];
		$checkUserEmail = checkUserEmail($emailAddress);
		if($checkUserEmail == 0) {
			$checkUserMobile = checkUserMobile($mobile);
			if($checkUserMobile == 0) {
				$userRegistration = userRegistration($fullName, $emailAddress, $mobile, $gender, $password, $dob);
				if($userRegistration == TRUE) {	
					$response['status'] = "Success";
				} else {
					$response['status'] = "Failed";
				}
			} else {
				$response['status'] = "Mobile Exists";
			}
		} else {
			$response['status'] = "Email Address Exists";
		}
		echo json_encode($response);
	}
	
	if($actionType == "listAllUsersDetails") {
		$listAllUsersDetails = listAllUsersDetails();
		echo json_encode($listAllUsersDetails);
	}
	
	if($actionType == "userLogin") {
		
	}
	
	if($actionType == "forgotPassword") {
		
	}
	
} else {
	echo "Invalid Authentication";
}
?>