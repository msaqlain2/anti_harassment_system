<?php
error_reporting(0);
session_start();
if(isset($_SESSION['userEmail']) == null && isset($_SESSION['userId']) == null) {
	header("Location: login.php");
}
?>

<div class="container-fluid">
	<nav class="navbar navbar-expand-lg bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand bg-primary text-light p-2 fw-bold" href="#">Anti Harrasment System</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarText">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link" href="complaint_history.php">Dashboard</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="register_complaint.php">Register Complaint</a>
	        </li>
	      </ul>
	      <span class="navbar-text">
	      	<a href="php_scripts/student/logout/logout.php">
		        <button class="btn btn-danger">Logout</button>
	      	</a>
	      </span>
	    </div>
	  </div>
	</nav>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>