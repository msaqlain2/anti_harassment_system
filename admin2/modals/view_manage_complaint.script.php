<?php 
require_once('../php_scripts/database/database_connection.php');

$query = "SELECT students.*, complaints.* FROM students, complaints WHERE complaints.id = 12 AND students.id = complaints.student_id;";

$row = mysqli_fetch_assoc($query);



?>