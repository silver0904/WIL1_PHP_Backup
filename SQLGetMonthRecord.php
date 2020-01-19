<?php
require "conn.php";
$table = $_POST["params1"];
$ID = $_POST["params0"];
$query = "select * from $table where userID=$ID";

if ($result = mysqli_query($con,$query)){
    echo json_encode($result->fetch_assoc());
}
mysqli_close($con);
?>
