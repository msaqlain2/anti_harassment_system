<?php 
require_once('php_scripts/database/database_connection.php');
require_once('php_scripts/student/complaint_history/view_complaint_history.php');
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
			<div class="col-sm-12 col-md-12 mt-4" class="section" id="complaint_detailsC">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-sm-10 col-md-10">	
								<h3>View Complaint</h3>
							</div>
						</div>
					</div>
					<div class="card-body">
						<table class="table">
						  <tbody>
						    <tr>
						      <th>Location of Harassment</th>
						      <td><?php echo $row['location_of_harrasment'] ?></td>
						    </tr>
						    <tr>
						      <th>Type of Harassment</th>
						      <td><?php echo $row['harrasment_type'] ?></td>
						    </tr>
						    <tr>
						      <th>Date of Harassment</th>
						      <td><?php echo $row['date_of_harrasment'] ?></td>
						    </tr>
						    <tr>
						      <th>Complaint Details</th>
						      <td><?php echo $row['complaint_details'] ?></td>
						    </tr>
						    <tr>
						      <th>Attached Document</th>
						      
						      <td><?php if($row['complaint_related_docs'] != '') {
										echo '<a class="text-decoration-none" href="'.'complaint_docs/'.$row['complaint_related_docs'].'" target="__blank">'. $row['complaint_related_docs'] .'</a>';
									} 
									else{
										echo  "<strong>Document Not Uploaded</strong>";
									}
									?></td>
						    </tr>
						    <tr>
						      <th>Complaint Status</th>
						      <td><?php 
						      if($row['status'] == 0) {
						      	echo '<span class="badge rounded-pill bg-danger">Not Process Yet</span>';
						      } 
						      if($row['status'] == 1) {
						      	echo '<span class="badge rounded-pill bg-primary">In-Process</span>';
						      } 
						      if($row['status'] == 2) {
						      	echo '<span class="badge rounded-pill bg-dark">Closed</span>';
						      } 

						  ?></td>
						    </tr>
						    <tr>
						      <th>Complaint Registered Date</th>
						      <td><?php echo $row['created_at'] ?></td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>