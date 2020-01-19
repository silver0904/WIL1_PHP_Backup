<?php
require "conn.php";

$userID = $_POST["params0"];
$groupIDs = $_POST["params1"];
$statusIDs = $_POST["params2"];

$groupID = (int) $groupIDs;
$statusID = (int) $statusIDs;

$query = "UPDATE groupMemberList SET statusID = $statusID WHERE groupID = $groupID AND userID ='$userID';";

$result = mysqli_query($con, $query);
if (!$result){
  echo 0;
  mysqli_close($con);
  exit("error: can't execute the query");
}
echo 1;
mysqli_close($con);

?>
