<?php 
require_once('php_scripts/database/database_connection.php');
require_once('php_scripts/student/register_complaint/register_complaint.php');								
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<?php include('includes/student/header.php'); ?>
	<div class="text-center mt-2">
		
	</div>
	<div class="container">
		<div class="row mt-2">
			<div class="col-sm-2 col-md-2"></div>
			<div class="col-sm-8 col-md-8">
				<div class="card">
					<div class="card-header bg-primary text-light">
						<h3>Register Complaint</h3>
					</div>
					<div class="card-body">
						<p class="fw-bold">Register New Complaint </p>
						<form method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<label>Location of Harrasment <span style="color:red">*</span></label>
										<input type="text" name="loh" class="form-control" required>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<label>Date of Harrasment <span style="color:red">*</span></label>
										<input type="date" name="doh" class="form-control" required>
									</div>
								</div>
							</div>
							<div class="form-group mt-3">
								<label>Type of Harrasment <span style="color:red">*</span></label>
								<select class="form-control" name="toh" required>
									<option value="" selected disabled>Select Harrasment Type</option>
									<?php
										$query = "SELECT * FROM `harrasment_type`";
										$run_query = mysqli_query($conn, $query);
										var_dump($run_query);
										if(mysqli_num_rows($run_query) > 0) {
											while($row = mysqli_fetch_assoc($run_query)){
												echo '<option value="'.$row['id'].'">'. $row['harrasment_type'] .'</option>';
											}
										}
										?>
								</select>
							</div>
							<div class="form-group mt-3">
							    <label for="exampleFormControlTextarea1">Complaint Details - Max 200 Words <span style="color:red">*</span></label>
							    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="complaint_details" maxlength="200"></textarea>
						  	</div>
						  	<div class="form-group mt-3">
							    <label for="exampleFormControlTextarea1">Complaint Related Doc (If any) </label>
							    <input type="file" class="form-control" name="complaint_doc">
						  	</div>
						  	<span class="text-success text-center"><?php echo $complaint_success;  ?></span>
								<span class="text-danger text-center"><?php echo $complaint_error;  ?></span>
								<span class="text-danger text-center"><?php echo $extension_error;  ?></span>
						  	<div class="form-group mt-3">
							    <input type="submit" class="btn btn-primary" name="register_complaint_btn" value="Register Complaint">
						  	</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-2 col-md-2"></div>
		</div>
	</div>
</body>
</html>