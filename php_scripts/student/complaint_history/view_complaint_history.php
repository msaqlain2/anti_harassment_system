<?php

$id =  $_GET['id'];
$query = "SELECT * FROM complaints, harrasment_type WHERE harrasment_type.id = complaints.type_of_harrasment";
$run_query = mysqli_query($conn, $query);
mysqli_num_rows($run_query);
$row = mysqli_fetch_assoc($run_query);



