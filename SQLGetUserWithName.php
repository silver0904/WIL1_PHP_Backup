<?php
require "conn.php";
$name = $_POST["params0"];

$query = "SELECT * FROM userProfile WHERE name='$name';";

if ($result = mysqli_query($con,$query)){
    echo json_encode($result->fetch_assoc());
}
mysqli_close($con);
?>
