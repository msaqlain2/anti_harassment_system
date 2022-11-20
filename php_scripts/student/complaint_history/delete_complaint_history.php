<?php
require_once('../../database/database_connection.php');

$id = $_GET['id'];
$query = "DELETE FROM `complaints` WHERE id = '$id'";
$run_query = mysqli_query($conn, $query);

if($run_query) {
	echo "<script>alert('Complaint Deleted Successfully')</script>";
	header('location: ../../../complaint_history.php');
}