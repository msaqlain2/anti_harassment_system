<?php 
require_once('../database/database_connection.php');

$value = $_POST['newValue'];
$id = $_POST['cid'];
$query = "UPDATE `complaint_reports` SET status = '$value' WHERE id = '$id'";
$run_query = mysqli_query($conn, $query);
var_dump($query);
if($run_query) {
	echo json_encode(array('statusCode' => 'Success'));
}
else{
	echo json_encode(array('statusCode' => 'Failed'));
}

?>