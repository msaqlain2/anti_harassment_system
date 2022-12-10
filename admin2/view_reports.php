<?php 

require_once('php_scripts/database/database_connection.php');
require_once('php_scripts/admin/send_report/view_specific_report.php');
include('includes/header.includes.php'); ?>
<?php $img = '../complaint_docs/'.$row['complaint_related_docs'] ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">View Complaint Report</h1>
                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-flex justify-content-between">
                                <div class="p-2">
                                    <h6 class="m-0 font-weight-bold text-primary">Manage Report of Student</h6>
                                </div>
                            </div>
                        </div>
                            
                        <div class="card-body">
                            <div class="table-responsive" style="overflow: hidden">
                                <div class="row" >
                                    <div class="col-sm-6 col-md-6">
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
                                              <th scope="row">Gender</th>
                                              <td><?php echo $row['gender'] ?></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                         <table class="table">
                                            <tr width="100">
                                                  <th scope="col" style="border:none">Complaint Information</th>
                                            </tr>
                                            <tbody>
                                                <tr>
                                                  <th scope="row">Location of Harassment</th>
                                                  <td><?php echo $row['location_of_harrasment'] ?></td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">Type of Harassment</th>
                                                  <td><?php echo $row['harrasment_type'] ?></td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">Date of Harassment</th>
                                                  <td><?php echo $row['date_of_harrasment'] ?></td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">Complaint Status</th>
                                                  <td><?php echo $status ?></td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">Complaint</th>
                                                  <td><?php echo $row['complaint_details'] ?></td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">Complaint Doc</th>
                                                  <td>
                                                      <?php if($row['complaint_related_docs'] != '') {
                                        echo '<a class="text-decoration-none" href="../'.'complaint_docs/'.$row['complaint_related_docs'].'" target="__blank">'. $row['complaint_related_docs'] .'</a>';
                                    } 
                                    else{
                                        echo  "<strong>Document Not Uploaded</strong>";
                                    }
                                    ?>
                                                  </td>
                                                </tr>
                                          </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive" style="overflow: hidden">
                                <div class="row" >
                                    <div class="col-sm-6 col-md-6">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                  <th scope="col" style="border:none">Report Information</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                              <th scope="row">Department</th>
                                              <td><?php echo $row['dept'] ?></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">Date</th>
                                              <td><?php echo $row['created_at'] ?></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">Status</th>
                                              <td><?php echo $cstatus; ?></td>
                                            </tr>
                                            <tr>
                                              <th scope="row">Report</th>
                                              <td><?php echo $row['complaint_detail'] ?></td>
                                            </tr>
                                          </tbody>
                                        </table>
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

