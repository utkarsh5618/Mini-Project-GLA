<?php
//to include php code
require_once("constants.php");
//require_once() is used to include php code only once
$con=mysqli_connect(HOSTNAME,USERNAME,PASSWORD);

$dbcon=mysqli_select_db($con,DATABASE);

?>