<?php 

$id = $_GET['id'];
$query = "SELECT complaints.*, harrasment_type.*, students.*,complaint_reports.*, complaint_reports.status as cstatus FROM complaints, harrasment_type, students, complaint_reports WHERE harrasment_type.id = complaints.type_of_harrasment AND students.id = complaints.student_id AND complaint_reports.complaint_id = complaints.id AND complaint_reports.id = '$id' ";
$run_query = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($run_query);
if($row['status'] == 0) {
			        	$status = "<span class='badge rounded-pill bg-danger text-light p-2'>Not Process Yet</span>";
			        }
			else if($row['status'] == 1) {
			        	$status = "<span class='badge rounded-pill bg-primary text-light p-2'>In-Process</span>";
			        }
	        else if($row['status'] == 2) {
			        	$status = "<span class='badge rounded-pill bg-dark text-light p-2'>Closed</span>";
			        }
	        if($row['complaint_related_docs'] == null){
	        	
	        }

	        if($row['cstatus'] == 0) {
			        	$cstatus = "<span class='badge rounded-pill bg-danger text-light p-2'>Not Process Yet</span>";
			        }
			else if($row['status'] == 1) {
			        	$cstatus = "<span class='badge rounded-pill bg-primary text-light p-2'>In-Process</span>";
			        }
	        else if($row['status'] == 2) {
			        	$cstatus = "<span class='badge rounded-pill bg-dark text-light p-2'>Closed</span>";
			        }
	        if($row['complaint_related_docs'] == null){
	        	
	        }

?>