<?php 
session_start();

if(isset($_POST['update'])) {
	$id = $_GET['id'];
	$loh = $_POST['loh'];
	$toh = $_POST['toh'];
	$doh = $_POST['doh'];
	$old_complaint_doc = $_POST['old_complaint_doc'];
	$complaint_details = mysqli_real_escape_string($conn, $_POST['complaint_details']);
	$sid = $_SESSION['userId'];
	$complaint_doc = '';
	$new_complaint_doc = $_FILES['new_complaint_doc']['name'];
	$tmp_doc = $_FILES['new_complaint_doc']['tmp_name'];
	$extension = strtolower(pathinfo($new_complaint_doc, PATHINFO_EXTENSION));
	$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc');
	$path = 'complaint_docs/';


	
	if($new_complaint_doc != '' AND in_array($extension, $valid_extensions)) {
			$final_doc = $new_complaint_doc;
			$path = $path.strtolower($final_doc);
			move_uploaded_file($tmp_doc, $path);
			$complaint_doc = $final_doc;	
	}

	if($new_complaint_doc == ''){
		$complaint_doc = $old_complaint_doc;
	}
	
	if(!in_array($extension, $valid_extensions) AND $new_complaint_doc != '') {
		$extension_error = "Only jpeg, jpg, png, gif, pdf, doc formats are accepted for complaint doc!!!";
	}
	else{
		$query = "UPDATE `complaints` SET location_of_harrasment = '$loh', 
		type_of_harrasment = '$toh', date_of_harrasment = '$doh', 
		complaint_details = '$complaint_details', complaint_related_docs = '$complaint_doc' WHERE id = '$id'";
		$run_query = mysqli_query($conn, $query);
		if($run_query) {
			$update_success = "Compaint has Updated Successfully";
			header('location: complaint_history.php' );
		}
		else{
			$update_error = "Something went wrong";
		}
	}
	

}