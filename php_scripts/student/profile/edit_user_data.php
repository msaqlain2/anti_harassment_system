<?php


$id = $_SESSION['userId'];
if(isset($_POST['update_profile'])) {
	$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
	$roll_no = mysqli_real_escape_string($conn, $_POST['roll_no']);
	$department = mysqli_real_escape_string($conn, $_POST['department']);
	$contact_number = mysqli_real_escape_string($conn, $_POST['contact_no']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$query = "UPDATE `students` SET full_name = '$full_name', roll_number = '$roll_no', department = '$department', contact_number = '$contact_number', gender = '$gender' WHERE id = '$id'";
	$run_query = mysqli_query($conn, $query);

	if($run_query) {
		echo "<script>alert('Your data has updated successfully')</script>";
		header('location: profile.php');
	}
}