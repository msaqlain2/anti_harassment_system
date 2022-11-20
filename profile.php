<?php
require_once('php_scripts/database/database_connection.php');
require_once('php_scripts/student/profile/fetch_user_data.php');
require_once('php_scripts/student/profile/edit_user_data.php');

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
	<div class="container-fluid" style="background: #eff1f2;height: 100vh;">
		<div class="row" >
	<?php include('includes/student/sidebar_nav.php'); ?>
			<div class="col-sm-8 col-md-8 mt-4" class="section" id="complaint_detailsC">
				<div class="card">
					<div class="card-header">
						<h3>Profile</h3>
					</div>
					<div class="card-body">
						<form method="post">
							<div class="row mt-4">
								<div class="col-sm-6 col-md-6">
									<label>Full Name</label>
									<input type="text" name="full_name" class="form-control" required value="<?php echo $row['full_name'] ?>">
								</div>
								<div class="col-sm-6 col-md-6">
									<label>Email</label>
									<input type="readonly" class="form-control" required readonly value="<?php echo $row['email'] ?>">
								</div>
							</div>
							<div class="row mt-4">
								<div class="col-sm-6 col-md-6">
									<label>Roll No.</label>
									<input type="number" name="roll_no" class="form-control" value="<?php echo $row['roll_number'] ?>">
								</div>
								<div class="col-sm-6 col-md-6">
									<label>Department</label>
									<input type="text"  name="department" class="form-control" value="<?php echo $row['department'] ?>">
								</div>
							</div>

							<div class="row mt-4">
								<div class="col-sm-6 col-md-6">
									<label>Contact No.</label>
									<input type="number" name="contact_no" class="form-control" value="<?php echo $row['contact_number'] ?>">
								</div>
								<div class="col-sm-6 col-md-6">
									<label>Gender</label>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="gender" id="male" value="Male"
									  <?php 
									  if($row['gender'] == 'Male') {
									  	echo 'checked';
									  }
									  ?>>
									  <label class="form-check-label" for="flexRadioDefault1" >
									    Male 
									  </label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="gender" id="female" value="Female"
									  <?php 
									  if($row['gender'] == 'Female') {
									  	echo 'checked';
									  }
									  ?>
									  >
									  <label class="form-check-label" for="flexRadioDefault2">
									    Female
									  </label>
									</div>
								</div>
							</div>
							<div class="row mt-4">
								<div class="col-sm-5 col-md-5">
								</div>
								<div class="col-sm-4 col-md-4">
									<input type="submit" name="update_profile" class="btn btn-warning" value="Update Profile">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>