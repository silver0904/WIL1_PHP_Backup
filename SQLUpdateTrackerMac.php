<?php
require "conn.php";
$userID = $_POST["params0"];
$mac = $_POST["params1"];

$query = "UPDATE userProfile SET MAC = '$mac' WHERE userID = '$userID';";
if (mysqli_query($con, $query)) {
  echo 1;
}
else{
  echo -1;
}
mysqli_close($con);
?>
