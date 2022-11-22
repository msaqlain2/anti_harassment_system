<?php 

require_once('php_scripts/database/database_connection.php');
require_once('php_scripts/admin/manage_students/view_manage_students.php');
include('includes/header.includes.php'); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manage Complaints</h1>
                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Manage Complaint Reocrds of Students</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="overflow: hidden">
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col" style="border:none">Student Information</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                  <th scope="row">Contact Number</th>
                                  <td><?php echo $row['contact_number'] ?></td>
                                </tr>
                                <tr>
                                  <th scope="row">Gender</th>
                                  <td><?php echo $row['gender'] ?></td>
                                </tr>
                                <tr>
                                  <th scope="row">Registered Date and Time</th>
                                  <td><?php echo $row['created_at'] ?></td>
                                </tr>
                              </tbody>
                            </table>
                                   
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php include('includes/footer.includes.php'); ?>

