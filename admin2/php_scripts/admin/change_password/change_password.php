<?php


if(isset($_POST['change_password'])) {
	$current_password = $_POST['current_password'];	
	$new_password = $_POST['new_password'];	
	$confirm_password = $_POST['confirm_password'];

	$query = "SELECT id, password FROM `admin` WHERE id = '1'";	
	$run_query = mysqli_query($conn,$query);
	

	$row = mysqli_fetch_assoc($run_query);

	if($current_password != $row['password']) {
		$password_error = "Invalid Current Password, Please try again!";
	}
	elseif ($new_password != $confirm_password) {
		$password_error= "Password Not Matched";
	}
	else{
		$update_query = "UPDATE `admin` SET password = '$new_password' WHERE id = '1'";
		$run_update_query = mysqli_query($conn, $update_query);

		if($run_update_query) {
			$password_success = "Password has changed successfully";
		}else{
			$password_error = "Something went wrong!";
		}
	}
}