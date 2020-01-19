<?php
require "conn.php";
//get the posted parameters
$userID = $_POST["params0"];
$sLove = $_POST["params1"];

//format the parameters
$love = (int)$sLove;

// Create the query with the parameters
$query = "UPDATE petProfile SET love = $love WHERE userID = '$userID';";

//return 1 if update success, -1 if update failed
if (mysqli_query($con, $query)) {
  echo 1;
}
else{
  echo -1;
}
mysqli_close($con);
?>
