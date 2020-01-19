<?php
$hostname = "localhost";
$db_username = "WIL1";
$db_password = "wORKaRePs4";
$dbName = "test";

ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = mysqli_connect($hostname,$db_username,$db_password,$dbName);


?>
