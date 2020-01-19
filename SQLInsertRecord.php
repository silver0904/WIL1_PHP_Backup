<?php
require "conn.php";

$userID = $_POST["params0"];
$table = date("MY");

$query = "insert into $table values ('$userID',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);";
if ($result = mysqli_query($con,$query)){
    echo $result;
}
mysqli_close($con);
?>
