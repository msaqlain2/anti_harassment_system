<?php

require_once('php_scripts/database/database_connection.php');
require_once('php_scripts/student/login/student_login.php');
require_once('php_scripts/student/register/student_register.php');
if(isset($_SESSION['userEmail']) == true && isset($_SESSION['userId']) == true) {
	header("Location: register_complaint.php");
}
else{
}
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
		<div class="card mt-5" style="border-top: 5px solid blue;">
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<h3 class="m-5">Student Login</h3>
					<form method="post">
						<div class="row m-2">
							<div class="col-sm-12 col-md-12">
								<label class="fw-bold">Email Address<span class="text-danger"> *<span></label>
								<input type="email" class="form-control form-control-lg mt-1" name="email">
							</div>
						</div>
						<div class="row m-2">
							<div class="col-sm-12 col-md-12">
								<label class="fw-bold">Password<span class="text-danger"> *<span></label>
								<input type="password" class="form-control form-control-lg mt-1" name="password">
							</div>
							
						</div>
						<div class="row m-2 mt-3">
							<div class="col-sm-12 col-md-12 d-grid gap-2">
								<input type="submit" name="login" class="btn btn-primary btn-block"
								value="Login">
							</div>
						</div>
						<div class="row m-2 mt-3">
							<div class="col-sm-12 col-md-12 text-center">
								<p>Not a Member? <a href="sign_up.php" class="text-decoration-none">Sign Up</a> </p>
							</div>
						</div>	
						<div class="row">
							<div class="col-sm-12 col-md-12 text-center">
								<span class="text-danger"><?php

								if(isset($login_error)) {
								 	echo $login_error;
								 }  ?></span>
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