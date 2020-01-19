<?php
require "conn.php";
$userID = $_POST["params0"];
$groupIDs = $_POST["params1"];

$groupID = (int) $groupIDs;

$query = "DELETE FROM groupMemberList WHERE groupID = $groupID AND userID = $userID;";
if (mysqli_query($con,$query)){
    echo 1;
  }
else{
     echo -1;
}

mysqli_close($con);



 ?>
