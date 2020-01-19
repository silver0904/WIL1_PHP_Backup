<?php
require "conn.php";

$userID = $_POST["params0"];
$groupID = (int)$_POST["params1"];
$statusID = (int)$_POST["params2"];

$query ="update groupMemberList set statusID = $statusID where userID = '$userID' and groupID = $groupID;";
$result = mysqli_query($con,$query);
if ($result){
    echo $statusID;
}
else {
    echo -1;
}

mysqli_close($con);
?>
