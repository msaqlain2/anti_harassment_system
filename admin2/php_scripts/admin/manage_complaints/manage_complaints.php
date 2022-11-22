<?php
// session_start();
	
$query = 'SELECT complaints.id,  complaints.location_of_harrasment, harrasment_type.harrasment_type, complaints.status, students.full_name, students.roll_number FROM complaints, harrasment_type, students WHERE harrasment_type.id = complaints.type_of_harrasment AND students.id = complaints.student_id';
$result = mysqli_query($conn, $query);
$count = 1;
if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
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
			      <td>". $row['location_of_harrasment'] ."</td>
			      <td>". $row['harrasment_type'] ."</td>
			      
			      <td>". $status ."</td>
			      <td>". $row['roll_number'] ."</td>
			     
			      <td>	
			        <a href='view_manage_complaints.php?id=$id' class='btn btn-info btn-circle'>
                        <i class='fas fa-eye' ></i>
                    </a>
                    <a href='php_scripts/admin/manage_complaints/delete_complaint.php?id=$id' class='btn btn-danger btn-circle' onclick='return checkDelete()'>
                        <i class='fas fa-trash'></i>
                    </a>
			      </td>
				    </tr>";
	}
}
?>
