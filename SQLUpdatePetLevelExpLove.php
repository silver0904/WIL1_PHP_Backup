<?php
require "conn.php";
//get the posted parameters
$userID = $_POST["params0"];
$levels = $_POST["params1"];
$exps = $_POST["params2"];
$loves = $_POST["params3"];

//format the parameters
$exp = (int)$exps;
$level = (int)$levels;
$love = (int)$loves;


$query = "UPDATE petProfile
SET level = $level,
exp = $exp,
love = $love
WHERE userID = '$userID';";

$result = mysqli_query($con, $query);
if (!$result){
  exit("error: can't execute 2nd query");
}
echo 1;
mysqli_close($con);
?>
