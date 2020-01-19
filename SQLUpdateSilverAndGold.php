<?php
require "conn.php";
//get the posted parameters
$userID = $_POST["params0"];
$silvers = $_POST["params1"];
$golds = $_POST["params2"];

//format the parameters
$silver = (int)$silvers;
$gold = (int)$golds;

// Create the query with the parameters
$query = "UPDATE petProfile SET silver = $silver, gold = $gold WHERE userID = '$userID';";

//return 1 if update success, -1 if update failed
if (mysqli_query($con, $query)) {
  echo 1;
}
else{
  echo -1;
}
mysqli_close($con);
?>
