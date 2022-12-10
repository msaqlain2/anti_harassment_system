<?php

if(isset($_POST['submit_report'])) {

	$rd = $_POST['report_details'];
	$dept = $_POST['dept'];
	$ci = $_GET['id'];
	$date = date('Y-m-d');

	foreach ($dept as $key => $ah_dept) {
		$query = "INSERT INTO `complaint_reports`(`complaint_detail`, `dept`, `complaint_id`, `created_at`, `status`) VALUES
		('$rd', '$ah_dept', '$ci', '$date', '0')";
		$run_query = mysqli_query($conn, $query);
	}
	if($run_query) {
		$sus_msg = "Report Sended Successfully";
	}
	
}
?>
