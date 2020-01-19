<?php
require "conn.php";
$user_name = $_POST["params0"];
$table = "loginTest";
$query = "SELECT * FROM $table WHERE username LIKE '$user_name';";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result)>0){
  echo "1";
}
else{
  echo "0";
}
 ?>
