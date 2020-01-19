<?php
require "conn.php";
$user_name = $_POST["params0"];
$user_password =  $_POST["params1"];
$table = "loginTest";
$query = "SELECT userID FROM $table WHERE username = '$user_name' AND password = '$user_password';";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result)==1){
  $row=mysqli_fetch_array($result);
  //print(json_encode($row));
  echo $row['userID'];
}
else{
  echo "-1";
}
mysqli_close($con);
 ?>
