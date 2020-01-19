<?php
require "conn.php";
$userID = $_POST["params0"];
$groupID = (int)$_POST["params1"];

$query = "select isSuccess,isEnd from session where groupID=$groupID;";
$result = mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$isEnd = $row['isEnd'];
if ($isEnd == 1){
    $query = "update groupMemberList set statusID = 5 where groupID=$groupID and userID = '$userID'";
    if (mysqli_query($con,$query)){
        echo $row['isSuccess'];
    }
}
else{
    echo 2;
}
mysqli_close($con);
?>
