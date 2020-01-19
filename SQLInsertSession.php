<?php
require "conn.php";

$groupIDs = $_POST["params0"];
$durationInMins = $_POST["params1"];
$targetSteps = $_POST["params2"];

if ($durationInMins==""||$groupIDs==""||$targetSteps==""){
  echo -1;
  exit();
}

$groupID = (int)$groupIDs;

$targetStep = (int)$targetSteps;

$str = "+".$durationInMins." minute";

$launchTime = date('Y-m-d H:i:s',strtotime("now"));
$endTime = date('Y-m-d H:i:s',strtotime($str));



$query ="INSERT INTO session VALUES ($groupID,'$launchTime','$endTime',$targetStep,0,0);";
if (mysqli_query($con, $query)) {
  echo 1;
}
else{
  echo -1;
}
mysqli_close($con);
?>
