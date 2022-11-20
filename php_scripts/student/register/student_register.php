<?php
error_reporting(0);
date_default_timezone_set("Asia/Karachi");
session_start();

if(isset($_SESSION['userEmail']) == true && isset($_SESSION['userId']) == true) {
	header("Location: register_complaint.php");
}
else{
}
if(isset($_POST['register'])) {
	$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$roll_no = mysqli_real_escape_string($conn, $_POST['roll_no']);
	$department = mysqli_real_escape_string($conn, $_POST['department']);
	$contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$created_at = date('Y-m-d h:i:s');
	$select = "SELECT id, email FROM `students` WHERE email = '$email'";
	$run_query = mysqli_query($conn, $select);

	

	if(mysqli_num_rows($run_query) > 0) {
		$row = mysqli_fetch_assoc($run_query);
		if($email == isset($row['email'])) {
			$email_error = "Email Already Exists";
		}
	}
	else if($confirm_password != $password) {
		$password_error = "* Password Not Matched";

	}
	else{
		$query = "INSERT INTO `students` (`full_name`, `email`, `roll_number`, `department`, `contact_number`, `password`, `gender`, `created_at`) VALUES ('$full_name', '$email', '$roll_no', '$department', '$contact_number', '$password', '$gender', '$created_at')";
		$result = mysqli_query($conn, $query);

		echo "<script>alert('Account Created Successfully!')</script>";
		header('location: login.php');
			
		
	}
}