<?php
require "conn.php";
$table = date("MY");
$ID = $_POST["params0"];
$query = "select userID,`18` from Feb2019 where userID=$ID";
$result = mysqli_query($con,$query);
if ($result = mysqli_query($con,$query)){
  echo json_encode($result->fetch_assoc());
}
mysqli_close($con);
?>
