<?php
require "conn.php";
$userID = $_POST["params0"];
$status1 = $_POST["params1"];
$status2 = $_POST["params2"];
$status3 = $_POST["params3"];
$status4 = $_POST["params4"];
$status5 = $_POST["params5"];
$status6 = $_POST["params6"];

$query = "UPDATE mission SET DailyLogin = '$status1',FirstFeed='$status2',Steps3000='$status3',Steps5000='$status4',Steps5000='$status5',Steps10000='$status6' WHERE userID = '$userID';";
if (mysqli_query($con, $query)) {
  echo 1;
}
mysqli_close($con);
?>
