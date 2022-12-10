<?php 
require_once('php_scripts/database/database_connection.php');
require_once('php_scripts/admin/send_report/send_report.php');
include('includes/header.includes.php'); ?>

        <!-- Content Wrapper -->
        
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Send Report</h1>
                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Send Report to Anti Harassment department</h6>
                        </div>
                        <div class="card-body">
                            <p class="text-success text-center"><?php 
                            if(isset($sus_msg)){
                                echo $sus_msg;
                            }
                        ?></p>
                            <form method="post">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Report detail</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="report_details" rows="3"></textarea>
                                </div>
                                <div class="row">
                                    <label>Send Report to: </label>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-check">
                                          <input class="form-check-input" name="dept[]" type="checkbox" value="Girls Rescue" id="girls_rescue">
                                          <label class="form-check-label" for="girls_rescue">
                                           Girls Rescue
                                          </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-check">
                                          <input class="form-check-input" name="dept[]" type="checkbox" value="Student Affair" id="student_affair">
                                          <label class="form-check-label" for="student_affair">
                                            Student Affair
                                          </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-check">
                                          <input class="form-check-input" name="dept[]" type="checkbox" value="Police" id="police">
                                          <label class="form-check-label" for="police">
                                            Police
                                          </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 col-md-5"></div>
                                    <div class="col-sm-4 col-md-4 mt-3  ">
                                        <input type="submit" class="btn btn-primary" name="submit_report" value="Submit Report" name="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include('includes/footer.includes.php'); ?>

