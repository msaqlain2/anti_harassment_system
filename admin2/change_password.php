<?php 

require_once('php_scripts/database/database_connection.php');
require_once('php_scripts/admin/change_password/change_password.php');
include('includes/header.includes.php'); ?>

        <!-- Content Wrapper -->
        
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Change Password</h1>
                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Manage  Password</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="overflow: hidden;">
                                <div class="row">
                                    <div class="col-sm-2 col-md-2"></div>
                                    <div class="col-sm-8 col-md-8">
                                        <form method="post">
                                            <div class="form-group">
                                                <label>Current Password</label>
                                                <input type="Password" class="form-control" name="current_password">
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="Password" class="form-control" name="new_password">
                                            </div>
                                            <div class="form-group">
                                                <label>Re-Type New Password</label>
                                                <input type="Password" class="form-control" name="confirm_password">
                                            </div>
                                            <p class="text-center text-success"><?php  
                                            if(isset($password_success)) {echo $password_success; } ?></p>
                                            <p class="text-center text-danger"><?php  
                                            if(isset($password_error)) {echo $password_error; } ?></p>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-success" name="change_password" value="Change Password">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



<?php include('includes/footer.includes.php'); ?>