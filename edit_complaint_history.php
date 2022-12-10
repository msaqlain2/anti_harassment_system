<?php 

require_once('php_scripts/database/database_connection.php');
require_once('php_scripts/student/complaint_history/view_complaint_history.php');
require_once('php_scripts/student/complaint_history/edit_complaint_history.php');

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
								<h3>Update Complaint</h3>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-sm-2 col-md-2"></div>
								<div class="col-sm-4 col-md-4">
									<label>Location of Harassment</label>
									<input type="text" name="loh" class="form-control" required value="<?php echo $row['location_of_harrasment'] ?>">
								</div>
								<div class="col-sm-4 col-md-4">
									<label>Type of Harassment</label>
									<select class="form-control" name="toh" required>
										<option value="" selected disabled>Select Harassment Type</option>
										<?php 
										$query = "SELECT * FROM `harrasment_type`";
										$run_query = mysqli_query($conn, $query);
										if(mysqli_num_rows($run_query) > 0) {

											
											while($data = mysqli_fetch_assoc($run_query)){
												if($row['harrasment_type'] == $data['harrasment_type']) {
													echo '<option selected value="'. $data['id'] .'">'. $data['harrasment_type'] .'</option>';	
												}
												else{
													echo '<option value="'. $data['id'] .'">'. $data['harrasment_type'] .'</option>';
												}
											}
										}

										
										?>
									</select>
								</div>
								<div class="col-sm-2 col-md-2"></div>
							</div>
							<div class="row mt-3">
								<div class="col-sm-2 col-md-2"></div>
								<div class="col-sm-4 col-md-4">
									<label>Date of Harassment</label>
									<input type="date" name="doh" class="form-control" required value="<?php echo date('Y-m-d',strtotime($row["date_of_harrasment"])) ?>">
								</div>
								<input type="hidden" value="<?php echo $row['complaint_related_docs']  ?>" name="old_complaint_doc">
								<div class="col-sm-4 col-md-4">
									<label>Complaint Related Doc</label>
									<input type="file" name="new_complaint_doc" class="form-control" >
								</div>
								<div class="col-sm-2 col-md-2"></div>
							</div>
							<div class="row mt-3">
								<div class="col-sm-2 col-md-2"></div>
								<div class="col-sm-8 col-md-8">
									<label>Complaint Details</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="complaint_details"><?php echo $row['complaint_details'] ?></textarea>
								</div>
							</div>

							<div class="row mt-3">
								<div class="col-sm-2 col-md-2"></div>
								<div class="col-sm-8 col-md-8">
									<label>Current Uploaded Doc:</label>
									<?php if($row['complaint_related_docs'] != '') {
										echo '<a class="text-decoration-none" href="'.'complaint_docs/'.$row['complaint_related_docs'].'" target="__blank">'. $row['complaint_related_docs'] .'</a>';
									} 
									else{
										echo  "<strong>Document Not Uploaded</strong>";
									}
									?>
								</div>
							</div>
							<p class="text-center mt-2 text-success"><?php echo $update_success;  ?></p>
							<p class="text-center mt-2 text-danger"><?php echo $update_error;  ?></p><p class="text-center mt-2 text-danger"><?php echo $extension_error;  ?></p>


							<div class="row mt-3">
								<div class="col-sm-5 col-md-5">
									
								</div>
								<div class="col-sm-4 col-md-4">
									<input type="submit" class="btn btn-warning" name="update" value="Update Complaint">
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