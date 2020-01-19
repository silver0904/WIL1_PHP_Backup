<?php
require "conn.php";
$userID = $_POST["params0"];

$query = "SELECT * FROM session WHERE groupID IN
(SELECT groupID FROM groupMemberList
WHERE userID ='$userID');";

$result = mysqli_query($con,$query);
if ($result){
    echo json_encode($result->fetch_assoc());
}

mysqli_close($con);
 ?>
