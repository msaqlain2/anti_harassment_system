<?php
session_start();
session_destroy();

header('location: ../../official_login.php');

?>