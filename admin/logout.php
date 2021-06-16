<?php
session_start();
session_destroy();
header('location:http://localhost/testing2/adminlogin.php');
?>