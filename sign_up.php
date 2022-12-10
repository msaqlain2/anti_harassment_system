<?php 
require_once('php_scripts/database/database_connection.php');
require_once('php_scripts/student/register/student_register.php');
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
	<div class="container">
		<div class="card mt-4" style="border-top: 5px solid blue;">
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<h3 class="m-5">Student Registration</h3>
					<form method="post" enctype="multipart/form-data">
						<div class="row m-2">
							<div class="col">
								<p class="text-danger fw-bold"><?php if(isset($password_error) == "POST"){
									echo $password_error;
								}
								  ?></p>
							  	<p class="text-danger fw-bold"><?php if(isset($email_error) == "POST"){
									echo $email_error;
								}
							  ?></p>
							</div>
						</div>
						<div class="row m-2">
							<div class="col-sm-6 col-md-6">
								<label class="fw-bold">Full Name<span class="text-danger"> *<span></label>
								<input type="text" class="form-control mt-1" name="full_name" required value="<?php if(isset($_POST['full_name'])) { echo $_POST['full_name']; } ?> ">
							</div>
							<div class="col-sm-6 col-md-6">
								<label class="fw-bold">Email Address<span class="text-danger"> *<span></label>
								<input type="email" class="form-control mt-1" required name="email" value="<?php if(isset($_POST['email']) && !(isset($email_error))) { echo $_POST['email']; }?>">
								
							</div>
						</div>
						<div class="row m-2">
							<div class="col-sm-6 col-md-6">
								<label class="fw-bold">Department<span class="text-danger"> *<span></label>
								<input type="text" class="form-control mt-1" name="department" required value="<?php if(isset($_POST['department'])) { echo $_POST['department']; }?>">
							</div>
							<div class="col-sm-6 col-md-6">
								<label class="fw-bold">Roll No<span class="text-danger"> *<span></label>
								<input type="text" class="form-control mt-1" required name="roll_no" value="<?php  if(isset($_POST['roll_no'])) { echo $_POST['roll_no']; }?>">
							</div>
						</div>
						<div class="row m-2">
							<div class="col-sm-12 col-md-12">
								<label class="fw-bold">Contact No.<span class="text-danger"> *<span></label>
								<input type="number" class="form-control mt-1" name="contact_number" minlength="11" placeholder="03311234569" required value="<?php if(isset($_POST['contact_number'])) { 
									echo $_POST['contact_number']; } ?> ">
							</div>
						</div>
						<div class="row m-2">
							<div class="col-sm-6 col-md-6">
								<label class="fw-bold">Password<span class="text-danger"> *<span></label>
								<input type="Password" class="form-control mt-1" required minlength="6" name="password">
							</div>
							<div class="col-sm-6 col-md-6">
								<label class="fw-bold">Confirm Password<span class="text-danger"> *<span></label>
								<input type="Password" class="form-control mt-1" required name="confirm_password">
							</div>
						</div>
						<div class="row m-2 mt-3">
							<div class="col-sm-4 col-md-4">
								<label class="fw-bold">Gender <span class="text-danger"> *<span></label>
							</div>
							<div class="col-sm-2 col-md-2">
								<input class="form-check-input" value="Male" type="radio" name="gender" required id="male"
								<?php 
									if(isset($_POST['gender']) == "Male"){
										echo "checked";
									}
								?>
								>
							  	<label class="form-check-label" for="male">
							    Male 
							  	</label>
							</div>
							<div class="col-sm-4 col-md-4">
							  	<input class="form-check-input" value="Female" type="radio" name="gender" id="female" 
							  	<?php
							  	if(isset($_POST['gender']) == "Female"){
										echo "checked";
									}
							  	?>
							  	>
								<label class="form-check-label" for="female">
								    Female
								</label>
							</div>
						</div>
						<div class="row m-2">
							<div class="col-sm-12 col-md-12">
								<label class="fw-bold">Upload Profile Image</label>
								<input type="file" class="form-control mt-1" name="profile_img">
							</div>
						</div>
						<p class="text-center text-danger"><?php if(isset($extension_error)) { echo $extension_error; } ?></p>
						<div class="row m-2 mt-3">
							<div class="col-sm-12 col-md-12 d-grid gap-2">
								<input type="submit" name="register" class="btn btn-primary btn-block"
								value="Register">
							</div>
						</div>
						<div class="row m-2 mt-3">
							<div class="col-sm-12 col-md-12 text-center">
								<p>Already a Member? <a href="login.php" class="text-decoration-none">Login</a> </p>
							</div>
						</div>
							
					</form>
				</div>
				<div class="col-sm-6 col-md-6">
					<img src="https://img.freepik.com/free-vector/sexual-harassment-abstract-concept-vector-illustration-sexual-bullying-abnormal-labor-relationship-abuse-assault-harassment-relationships-online-social-interactions-abstract-metaphor_335657-1459.jpg?w=2000" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</body>
</html>