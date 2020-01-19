<?php
require "conn.php";
$userID = $_POST["params0"];
$task = $_POST["params1"];
$status = $_POST["params2"];

$query = "UPDATE mission SET `$task` = '$status' WHERE userID = '$userID';";
if (mysqli_query($con, $query)) {
  echo 1;
}
mysqli_close($con);
?>
