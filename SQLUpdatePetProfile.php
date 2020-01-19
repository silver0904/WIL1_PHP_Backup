<?php
require "conn.php";
//get the posted parameters
$userID = $_POST["params0"];
$petID = $_POST["params1"];
$name = $_POST["params2"];
$levels = $_POST["params3"];
$exps = $_POST["params4"];
$loves = $_POST["params5"];
$silvers = $_POST["params6"];
$golds = $_POST["params7"];

//format the parameters
$level = (int)$levels;
$exp = (int)$exps;
$love = (int)$loves;
$silver = (int)$silvers;
$gold = (int)$golds;

// Create the query with the parameters
$query = "UPDATE petProfile
SET petID = '$petID',
name = '$name',
level = $level,
exp = $exp,
love = $love,
silver = $silver,
gold = $gold
WHERE userID = '$userID';";

//return 1 if update success, -1 if update failed
if (mysqli_query($con, $query)) {
  echo 1;
}
else{
  echo -1;
}
mysqli_close($con);
?>
