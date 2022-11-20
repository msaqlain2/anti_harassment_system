<style type="text/css">
	.modal-dialog {
		min-width: 100%;
  		min-height: 100%;
  		margin-top:  40px;
  		padding-top: 0;
}

.modal-content {
	min-height: 100%;
  	min-width: 100%;
  	height: 100%;
  	border-radius: 0;
}
</style>

<?php require_once('view_manage_complaints.php'); ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Manage Complaints Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="modal-content">
      		<div class="row">
      			<div class="col-sm-6 col-md-6">
			        <table class="table">		  
					  <tbody>
					  	<thead>
					  		<th>Student Information</th>
					  	</thead>
					    <tr>
					      <th scope="row">Full Name</th>
					      <td><?php echo $row['full_name'] ?></td>
					    </tr>
					    <tr>
					      <th scope="row">Email</th>
					      <td><?php echo $row['email'] ?></td>
					    </tr>
					    <tr>
					      <th scope="row">Roll No.</th>
					      <td><?php echo $row['roll_number'] ?></td>
					    </tr>
					    <tr>
					      <th scope="row">Department</th>
					      <td><?php echo $row['department'] ?></td>
					    </tr>
					    <tr>
					      <th scope="row">Gender</th>
					      <td><?php echo $row['gender'] ?></td>
					    </tr>
					    
					  </tbody>
					</table>
				</div>
				<div class="col-sm-6 col-md-6">
			        <table class="table">
			        <thead>
					  		<th>Compaint Information</th>
					  	</thead>		  
					  <tbody>
					    <tr>
					      <th scope="row">Location of Harassment</th>
					      <td><?php echo $row['location_of_harrasment'] ?></td>
					    </tr>
					    <tr>
					      <th scope="row">Type of Harassment</th>
					      <td><?php echo $row['type_of_harrasment'] ?></td>
					    </tr>
					    <tr>
					      <th scope="row">Date of Harassment</th>
					      <td><?php echo $row['date_of_harrasment'] ?></td>
					    </tr>
					    <tr>
					      <th scope="row">Complaint</th>
					      <td><?php echo $row['complaint_details'] ?></td>
					    </tr>
					    <tr>
					      <th scope="row">Complaint Doc</th>
					      <td><?php echo $row['complaint_related_docs'] ?></td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>

		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
