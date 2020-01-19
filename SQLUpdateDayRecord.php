<?php
require "conn.php";
$userID = $_POST["params0"];
$fullDate = $_POST["params1"];
$step = $_POST["params2"];
$day = substr($fullDate,0,2);
$dataTable = substr($fullDate,2);

$steps = (int)$step;

$query = "UPDATE $dataTable SET `$day` = $steps WHERE userID = '$userID';";
if (mysqli_query($con, $query)) {
  echo 1;
}
else{
  echo -1;
}
mysqli_close($con);
?>
