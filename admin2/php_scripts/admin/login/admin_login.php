<?php
session_start();

if(isset($_POST['login'])) {


	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$query = "SELECT id, email, password FROM `admin` WHERE email = '$email' AND password = '$password'";
	$result = mysqli_query($conn, $query);
	
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		if($email == isset($row['email']) && $password == isset($row['password'])) {
			header('location: manage_complaints.php');

			$_SESSION['userId'] = $row['id'];
			$_SESSION['userEmail'] = $row['email'];
		}
	}
	else{
		$login_error = "Invalid Credentials!";
	}

}
?>