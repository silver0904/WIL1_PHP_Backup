<?php
require "conn.php";
$userID = $_POST["params0"];
$groupIDs = $_POST["params1"];

$groupID = (int)$groupIDs;

$query = "SELECT 1 from groupMemberList WHERE userID = '$userID' AND groupID = $groupID LIMIT 1;";
$result = mysqli_query($con, $query);
if (!$result){
  echo "error!";
  exit("error: can't execute the query");
}
$exist = mysqli_num_rows($result);
if ($exist == 1){
  echo "User is already a member";
  mysqli_close($con);
  exit();
}

$query = "INSERT INTO groupMemberList VALUES ($groupID,'$userID',0);";
if (mysqli_query($con, $query)) {
  echo "Success!";
}
else{
  echo "Fail to add member!";
}
mysqli_close($con);

?>
