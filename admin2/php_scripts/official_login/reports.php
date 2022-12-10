<?php
error_reporting(0);
$dept = $_SESSION['user']['username'];

	$query = "SELECT complaints.id, complaints.location_of_harrasment, harrasment_type.harrasment_type, complaints.status, students.full_name, students.roll_number,complaint_reports.complaint_id, complaint_reports.id as ci ,complaint_reports.status, complaint_reports.dept, complaint_reports.complaint_detail FROM complaints, harrasment_type, students, complaint_reports WHERE harrasment_type.id = complaints.type_of_harrasment AND students.id = complaints.student_id AND complaint_reports.complaint_id = complaints.id AND complaint_reports.dept = '$dept' AND complaint_reports.dept = '$dept' ";

$result = mysqli_query($conn, $query);
$count = 1;
if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$id = $row['ci'];
		if($row['status'] == 0) {
			        	$status = "<span class='badge rounded-pill bg-danger text-light p-2'>Not Process Yet</span>";
			        }
			else if($row['status'] == 1) {
			        	$status = "<span class='badge rounded-pill bg-primary text-light p-2'>In-Process</span>";
			        }
	        else if($row['status'] == 2) {
			        	$status = "<span class='badge rounded-pill bg-dark text-light p-2'>Closed</span>";
			        }
		echo "<tr>

			      <td>". $count++ ." </td>
			      <td>". $row['full_name'] ."</td>
			      <td>". $row['roll_number'] ."</td>
			      <td>". $row['harrasment_type'] ."</td>
			      
			      <td>". $row['location_of_harrasment'] ."</td>
			      <td>". $status ."</td>
			     
			      <td>	
			        <a href='view_report.php?id=$id' class='btn btn-info btn-circle m-1'>
                        <i class='fas fa-eye' ></i>
                    </a>
                    <a href='php_scripts/girls_rescue/rep.php?id=$id' class='btn btn-danger btn-circle m-1' onclick='return checkDelete()'>
                        <i class='fas fa-trash'></i>
                    </a>
			      </td>
				    </tr>";
	}
}




?>
