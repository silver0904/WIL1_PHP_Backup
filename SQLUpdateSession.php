<?php
require "conn.php";

$groupIDs = $_POST["params0"];
$groupID = (int)$groupIDs;

$query ="select statusID from groupMemberList where groupID = $groupID;";
$result = mysqli_query($con,$query);

$index = 0;

while ($row = mysqli_fetch_array($result)){
    if ($row[0] == 0 || $row[0] == 1){
        echo "Not in session";
        return;
    }
    $rows[$index]=$row[0];
    $index++;
}

if (array_unique($rows) == array(3,4) || array_unique($rows) == array(4)){
    $query = "update session set isSuccess = 0, isEnd = 1 where groupID = $groupID;";
    $result = mysqli_query($con,$query);
    echo "Failed";
}
else if (array_unique($rows) == array(3)){
    $query = "update session set isSuccess = 1, isEnd = 1 where groupID = $groupID;";
    $result = mysqli_query($con,$query);
    echo "Success";
}
else {
    echo "not yet finish";
}
mysqli_close($con);
?>
