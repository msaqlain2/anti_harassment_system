<?php
require_once('../../database/database_connection.php');

$id = $_GET['id'];
$query = "DELETE FROM `students` WHERE id = '$id'";
$run_query = mysqli_query($conn, $query);
if($run_query) {
	echo "<script>alert('Student Deleted Successfully')</script>";
	header('location: ../../../manage_students.php');
}