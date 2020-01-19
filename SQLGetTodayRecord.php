<?php
require "conn.php";
$table = $_POST["params2"];
$ID = $_POST["params0"];
$day = $_POST["params1"];
$query = "select userID,$table.`$day` from $table where userID=$ID";

if ($result = mysqli_query($con,$query)){
    echo json_encode($result->fetch_assoc());
}
mysqli_close($con);
?>
