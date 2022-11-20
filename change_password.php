<?php
require_once('php_scripts/database/database_connection.php');
require_once('php_scripts/student/change_password/change_password.php');

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
						<h3>Change Password</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-2 col-md-2"></div>
							<div class="col-sm-8 col-md-8">
								<form method="post" class="mt-4">
									<div class="form-group">
										<label>Current Password</label>
										<input type="password" name="current_password" class="form-control" required>
									</div>
									<div class="form-group mt-4">
										<label>New Password</label>
										<input type="password" name="new_password" class="form-control" minlength="6" required>
									</div>
									<div class="form-group mt-4">
										<label>Confirm Password</label>
										<input type="password" name="confirm_password" class="form-control" required>
									</div>
									<div class="form-group mt-4">
										<input type="submit" name="change_password" class="btn btn-primary" value="Change Password">
									</div>
									<p class=" mt-3 text-center text-success"><?php if(isset($success_password)) {echo $success_password; }?></p>
									<p class=" mt-3 text-center text-danger"><?php if(isset($password_error)) {echo $password_error; }?></p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>