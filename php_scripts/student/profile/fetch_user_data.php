<?php
session_start();
$id = $_SESSION['userId'];
$query  = "SELECT id, full_name, email, roll_number, department, contact_number, gender FROM `students` WHERE id = '$id'";

$run_query = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($run_query);