<?php
require "conn.php";
$groupIDs = $_POST["params0"];

if ($groupIDs == ''){
  print("");
  mysqli_close($con);
  exit();
}
$groupID = (int) $groupIDs;

$query = "SELECT t3.*, t2.status FROM
(SELECT userID, statusID FROM groupMemberList WHERE groupID = $groupID) AS t1
INNER JOIN
(SELECT statusID, status FROM status) AS t2
ON t1.statusID = t2.statusID
INNER JOIN
(SELECT * FROM userProfile) AS t3
ON t1.userID = t3.userID;";

if ($result = mysqli_query($con,$query)){
  $resultArray = $result->fetch_all(MYSQLI_ASSOC);
  print (json_encode($resultArray));
}
mysqli_close($con);

?>
