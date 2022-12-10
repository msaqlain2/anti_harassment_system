<?php
session_start();

if(isset($_POST['login'])) {


	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);


	$query = "SELECT * FROM `official_login` WHERE email = '$email' AND password = '$password'";
	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		if($row['username'] === 'Girls Rescue') {
			$_SESSION['user'] = $row;
			header('location: reports.php');
		}
		else if($row['username'] === 'Student Affair') {
			$_SESSION['user'] = $row;
			header('location: reports.php');
		}
		else if($row['username'] === 'Police') {
			$_SESSION['user'] = $row;
			header('location: reports.php');
		}	
	}
	else{
			$login_error = "Invalid Credentials!";
		}
}
?>