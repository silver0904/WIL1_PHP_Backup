<?php
require "conn.php";
$groupIDs = $_POST["params0"];

$groupID = (int) $groupIDs;

$query = "DELETE FROM session where groupID = $groupID;";
if (mysqli_query($con,$query)){
  $query2 = "DELETE FROM groupMemberList where groupID = $groupID;";
  if (mysqli_query($con,$query2)){
    $query3 = "DELETE FROM `group` where groupID = $groupID;";
    if (mysqli_query($con,$query3)){
      echo 1;
    }
    else{
         echo -1;
    }
  }
  else{
      echo -1;
  }
}
else{
    echo -1;
}
mysqli_close($con);



 ?>
