<?php
require "conn.php";
$table = "example";
$query = "SELECT * FROM $table";
$result = mysqli_query($con, $query);
if ($result){
  while ($row=mysqli_fetch_array($result)){
    $flag[] = $row;
  }
  print(json_encode($flag));
}
mysqli_close($con);
?>
