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
	$uploaded_img = '';
	$profile = $_FILES['profile_img']['name'];
	$profile_tmp = $_FILES['profile_img']['tmp_name'];
	$extension = strtolower(pathinfo($profile, PATHINFO_EXTENSION));
	$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
	$path = 'profile_img/';

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
	else if(!in_array($extension, $valid_extensions) AND $profile != '') {
		$extension_error = "Only jpeg, jpg, png, gif, formats are accepted for profile image!!!";
	}
	else{

		if($profile != '') {
		$final_img = $profile;
		$path = $path.strtolower($final_img);
		move_uploaded_file($profile_tmp, $path);
		$uploaded_img = $final_img;
			echo "ui";
		}
		elseif($profile == ''){
			$uploaded_img = '';
			echo "as";
		}

		$query = "INSERT INTO `students` (`full_name`, `email`, `roll_number`, `department`, `contact_number`, `password`, `gender`, `created_at`, `profile_pic`) VALUES ('$full_name', '$email', '$roll_no', '$department', '$contact_number', '$password', '$gender', '$created_at', '$uploaded_img')";
		$result = mysqli_query($conn, $query);

		echo "<script>alert('Account Created Successfully!')</script>";
		header('location: login.php');
			
		
	}
}