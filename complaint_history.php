<?php 
require_once('php_scripts/database/database_connection.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<title></title>
</head>
<body>
	<?php include('includes/student/header.php'); ?>
	<div class="container-fluid" style="background: #eff1f2;height: 100vh;">
		<div class="row" >
	<?php include('includes/student/sidebar_nav.php'); ?>
			<div class="col-sm-8 col-md-8 mt-4" class="section" id="complaint_detailsC">
				<div class="card">
					<div class="card-header">
						<h3>Complaint History</h3>
					</div>
					<div class="card-body">
						<table class="table align-middle mb-0 bg-white">
				  <thead class="bg-light">
				    <tr>
				      <th>#</th>
				      <th>Location of Harassment</th>
				      <th>Type of Harrasment</th>
				      <th>Complaint Status</th>
				      <th>Actions</th>
				    </tr>
				  </thead>
				  <tbody>
				    <?php 
				     include('php_scripts/student/complaint_history/complaint_history.php'); ?>
				  </tbody>
				</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
</body>
</html>