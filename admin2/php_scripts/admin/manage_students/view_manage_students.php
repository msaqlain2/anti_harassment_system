<?php 

$id = $_GET['id'];
$query = "SELECT *  FROM `students` WHERE id = '$id' ";
$run_query = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($run_query);


?>