<?php
require "conn.php";

$query = "select * from itemShop";
$result = mysqli_query($con, $query);

if ($result){
  // while ($row=mysqli_fetch_array($result)){
  //   $flag[] = $row;
  // }
  // print(json_encode($flag));

  // $resultArray = $result->fetch_all(MYSQLI_NUM);
  // print(json_encode($resultArray));
  $resultArray = $result->fetch_all(MYSQLI_ASSOC);
  print (json_encode($resultArray));
}
mysqli_close($con);
?>
