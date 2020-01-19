<?php
require "conn.php";
$userID = $_POST["params0"];
$groupName = $_POST["params1"];

$query = "SELECT MAX(A.groupID)+1 AS id FROM
(SELECT groupID FROM `group` AS T) AS A;";
$result = mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$newID = $row['id'];

if ($newID){
  $query2 = "INSERT INTO `group` values ($newID,'$groupName','$userID');";
  if (mysqli_query($con,$query2)){
    $query3 = "INSERT INTO groupMemberList values ($newID,'$userID',0);";
    if (mysqli_query($con,$query3)){
      echo 1;
    }
    else{
         echo -1;
    }
  }
  else{
      echo -1;
  }
}
mysqli_close($con);

 ?>
