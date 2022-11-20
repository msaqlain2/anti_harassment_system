<?php
session_start();
$id = $_SESSION['userId'];
$query = "SELECT complaints.id, complaints.location_of_harrasment, harrasment_type.harrasment_type, complaints.status FROM complaints, harrasment_type WHERE harrasment_type.id = complaints.type_of_harrasment AND complaints.student_id = '$id' ";

$result = mysqli_query($conn, $query);
$count = 1;
if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
			if($row['status'] == 0) {
			        	$status = "<span class='badge rounded-pill bg-danger'>Not Process Yet</span>";
			        }
			else if($row['status'] == 1) {
			        	$status = "<span class='badge rounded-pill bg-primary'>In-Process</span>";
			        }
	        else if($row['status'] == 2) {
			        	$status = "<span class='badge rounded-pill bg-dark'>Closed</span>";
			        }
		echo "<tr>

			      <td>". $count++ ." </td>
			      <td>". $row['location_of_harrasment'] ."</td>
			      <td>".$row['harrasment_type'] ."</td>
			      <td>
			        ". $status ."
			      </td>
			      <td>
			      	<a href='view_complaint_history.php?id=". $row['id'] ."' class='text-decoration-none'>
				        <button type='button' class='btn btn-info text-light btn-sm'><i class='fa fa-eye '></i></button>
			        </a>
			        <a href='edit_complaint_history.php?id=". $row['id'] ."' class='text-decoration-none'>
			        <button type='button' class='btn btn-warning text-light btn-sm'><i class='fa fa-edit  '></i></button>
			        </a>
			        <a href='php_scripts/student/complaint_history/delete_complaint_history.php?id=". $row['id'] ."' name='delete_complaint' class='btn btn-danger text-light btn-sm'  onclick='return checkDelete()'><i class='fa fa-trash-alt'></i></button>
			        </a>
			        
			      </td>
				    </tr>";
	}
}
?>
