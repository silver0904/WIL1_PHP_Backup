<?php
require "conn.php";

$groupIDs = $_POST["params0"];
$groupID = (int)$groupIDs;

$query ="select statusID from groupMemberList where groupID = $groupID;";
$result = mysqli_query($con,$query);

$index = 0;

while ($row = mysqli_fetch_array($result)){
    if ($row[0] == 0 || $row[0] == 1 || $row[0] == 2){
        echo "Not in session";
        return;
    }
    $rows[$index]=$row[0];
    $index++;
}

if (array_unique($rows) == array(5)){
    $query = "delete from session where groupID = $groupID;";
    if (mysqli_query($con,$query)){
        $query = "update groupMemberList set statusID = 1 where groupID = $groupID;";
        if (mysqli_query($con,$query)){
            echo "Finished";
        }
    }
}
else {
    echo "not yet finish";
}
mysqli_close($con);
?>
