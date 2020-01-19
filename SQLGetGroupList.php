<?php
require "conn.php";
$userID = $_POST["params0"];

$query = "SELECT * FROM
test.`group` WHERE groupID IN
(SELECT groupID FROM groupMemberList
WHERE userID ='$userID')";

if ($result = mysqli_query($con,$query)){
  $resultArray = $result->fetch_all(MYSQLI_ASSOC);
  print (json_encode($resultArray));
}
mysqli_close($con);

?>
