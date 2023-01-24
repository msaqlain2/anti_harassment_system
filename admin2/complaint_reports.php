<?php 
require_once('php_scripts/database/database_connection.php');
include('includes/header.includes.php'); 
error_reporting(0);
?>

        <!-- Content Wrapper -->
        
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Complaint Reports</h1>
                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-flex justify-content-between">
                                <div class="p-2">
                                    <h6 class="m-0 font-weight-bold text-primary">View 
                                     Complaint Reports of 

                                <?php

                                    // if(isset($_POST['dept'])) {
                                // $condi = $_POST['dept'] == null ? "Girls Rescue" :  $_POST['dept'];
                                // echo $condi;
                                // }

                                    ?>

                                 </h6>
                                </div>
                                <div class="p-2">
                                   <form method="post">
                                       <div class="row">
                                           <div class="col-md-9 col-md-9">
                                               <div class="form-group">
                                                   <!-- <label>Select Department</label> -->
                                                   <select class="form-control" name="dept">
                                                       <option value="" selected disabled>Search Department</option>
                                                       <option value="Girls Rescue">Girls Rescue</option>
                                                       <option value="Student Affair">Student Affair</option>
                                                       <option value="Police">Police</option>
                                                   </select>
                                               </div>
                                           </div>
                                           <div class="col-md-3 col-md-3">
                                               <button type="submit" name="search_dept" class="    btn btn-success"> <i class="fa fa-search"></i> </button>
                                           </div>
                                       </div>
                                   </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S. No</th>
						                    <th>Full Name</th>
                                            <th>Roll No.</th>
						                    <th>Location of Harassment</th>
						                    <th>Type of Harassment</th>
						                    <th>Complaint Status</th>
                                            <th>Complaint Department</th>
						                    <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>S. No</th>
						                    <th>Full Name</th>
                                            <th>Roll No.</th>
						                    <th>Location of Harassment</th>
						                    <th>Type of Harassment</th>
						                    <th>Complaint Status</th>
                                            <th>Complaint Department</th>
						                    <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php include('php_scripts/admin/send_report/fetch_all_reports.php'); ?> 

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include('modals/view_manage_complaints.php'); ?>
<?php include('includes/footer.includes.php'); ?>

