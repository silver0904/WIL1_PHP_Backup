<?php
require "conn.php";

$userID = $_POST["params0"];
$query = "Select silver from petProfile where userID = $userID ";
$result = mysqli_query($con,$query);
if (mysqli_num_rows($result)==1){
  $row = mysqli_fetch_array($result);
  echo $row['silver'];
}
else{
  echo "-1";
}
mysqli_close($con);
?>

