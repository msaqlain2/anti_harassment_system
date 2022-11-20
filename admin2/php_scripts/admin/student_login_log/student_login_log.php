<?php
	
$query = 'SELECT * FROM `students`';
$result = mysqli_query($conn, $query);
$count = 1;
if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>
			      <td>". $count++ ." </td>
			      <td>". $row['full_name'] ."</td>
			      <td>".$row['email'] ."</td>
			      <td>".$row['roll_number'] ."</td>
			      <td></td>
			      <td></td>
				    </tr>";
	}
}
?>
