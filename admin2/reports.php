<?php 
require_once('php_scripts/database/database_connection.php');
include('includes/header_.php');

 ?>

        <!-- Content Wrapper -->
        
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manage Reports</h1>
                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Manage Reports Reocrds of Students</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S. No</th>
                                            <th>Full Name</th>
                                            <th>Roll No.</th>
                                            <th>Type of Harassment</th>
                                            <th>Location of Harassment</th>
                                            <th>Complaint Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>S. No</th>
                                            <th>Full Name</th>
                                            <th>Roll No.</th>
                                            <th>Type of Harassment</th>
                                            <th>Location of Harassment</th>
                                            <th>Complaint Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php include('php_scripts/official_login/reports.php'); ?> 

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

