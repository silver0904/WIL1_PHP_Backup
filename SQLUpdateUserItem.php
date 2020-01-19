<?php
require "conn.php";
//get the posted parameters
$userID = $_POST["params0"];
$itemIDs = $_POST["params1"];
$amounts = $_POST["params2"];

//format the parameters
$itemID = (int)$itemIDs;
$amount = (int)$amounts;


$query = "SELECT 1 from userItem WHERE userID = '$userID' AND itemID = '$itemID' LIMIT 1;";
$result = mysqli_query($con, $query);
if (!$result){
  exit("error: can't execute 1st query");
}

$exist = mysqli_num_rows($result);

$query2 = "";
if ($amount ==0 && $exist == 1) {
  $query2 = "DELETE FROM userItem WHERE userID = '$userID' AND itemID = '$itemID';";
}
else if ($amount >=1 && $exist ==0){
  $query2 = "INSERT INTO userItem(userID, itemID, amount) VALUES ($userID, $itemID, '1');";
}
else{
  $query2 = "UPDATE userItem SET amount = '$amount' WHERE userID = '$userID' AND itemID = '$itemID';";
}

$result = mysqli_query($con, $query2);
if (!$result){
  exit("error: can't execute 2nd query");
}
echo 1;
mysqli_close($con);
?>
