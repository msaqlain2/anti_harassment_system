<?php
session_start();

date_default_timezone_set("Asia/Karachi");

if(isset($_POST['register_complaint_btn'])) {
	$user_id = $_SESSION['userId'];
	$loh = mysqli_real_escape_string($conn, $_POST['loh']);
	$doh = mysqli_real_escape_string($conn, $_POST['doh']);
	$toh = mysqli_real_escape_string($conn, $_POST['toh']);
	$complaint_details = mysqli_real_escape_string($conn, $_POST['complaint_details']);
	"<br>";
	$created_at = date('Y-m-d h:i:s');
	$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc');
	$path = 'complaint_docs/';
	 

	$doc = $_FILES['complaint_doc']['name'];
	$tmp_doc = $_FILES['complaint_doc']['tmp_name'];
	$extension = strtolower(pathinfo($doc, PATHINFO_EXTENSION));

	if(!in_array($extension, $valid_extensions)) {
		$extension_error = "Not a valid extension for document";
		exit();
	}

		$final_doc = $doc;
		$path = $path.strtolower($final_doc);
		move_uploaded_file($tmp_doc, $path);

		$query = "INSERT INTO `complaints`(`student_id`, `location_of_harrasment`, `type_of_harrasment`, `date_of_harrasment`, `complaint_details`, `complaint_related_docs`, `status`, `created_at`) VALUES ('$user_id', '$loh', '$toh', '$doh', '$complaint_details', '$final_doc', '0', '$created_at')";
	
		$result = mysqli_query($conn, $query);

		if($result) {
			$complaint_success = "Complaint has Registered Successfully!";
		}
		else{}
}
