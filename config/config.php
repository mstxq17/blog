<?php
require_once('db_config.php');
$conn=mysqli_connect($dbhost,$dbusername,$dbpassword);
mysqli_select_db($conn,$dbname);
?>