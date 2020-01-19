<?php
require "conn.php";
$ID = $_POST["params0"];
$query = "select * from mission where userID = $ID";

if ($result = mysqli_query($con,$query)){
    echo json_encode($result->fetch_assoc());
}
mysqli_close($con);
?>
