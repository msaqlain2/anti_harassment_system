<?php
	
$query = 'SELECT * FROM `students` order by id DESC';
$result = mysqli_query($conn, $query);
$count = 1;
if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		echo "<tr>
			      <td>". $count++ ." </td>
			      <td>". $row['full_name'] ."</td>
			      <td>".$row['email'] ."</td>
			      <td>".$row['roll_number'] ."</td>
			      <td>".$row['department'] ."</td>
			     
			      <td>	
			        <a href='view_manage_students.php?id=$id' class='btn btn-info btn-circle'>
                        <i class='fas fa-eye' ></i>
                    </a>
                    <a href='php_scripts/admin/manage_students/delete_student.php?id=$id' class='btn btn-danger btn-circle' onclick='return checkDelete()'>
                        <i class='fas fa-trash'></i>
                    </a>
			      </td>
				    </tr>";
	}
}
?>
