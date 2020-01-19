<?php
require "conn.php";
$userID = $_POST["params0"];
$name = $_POST["params1"];
$s_height = $_POST["params2"];
$height = (float)$s_height;
$s_weight = $_POST["params3"];
$weight = (float)$s_weight;

$query = "UPDATE userProfile SET name = '$name', height = $height, weight = $weight WHERE userID = '$userID';";
if (mysqli_query($con, $query)) {
  echo 1;
}
else{
  echo -1;
}
mysqli_close($con);
?>
