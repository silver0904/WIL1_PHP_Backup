<?php
require "conn.php";

$userID = $_POST["params0"];
$itemIDs = $_POST["params1"];

$itemID = (int)$itemIDs;

//
// $query = "IF EXISTS
// (SELECT itemID from userItem WHERE userID = $userID AND itemID = $itemID)
// UPDATE userItem SET amount = amount + 1
// ELSE
// INSERT INTO userItem (userID, itemID, amount) VALUES ($userID, $itemID, '1');";
$resultArray = array(0,0,0);
$query1 = "SELECT 1 from userItem WHERE userID = '$userID' AND itemID = '$itemID' LIMIT 1;";
$query2 = "";
$result = mysqli_query($con, $query1);
$exist = mysqli_num_rows($result);

if ($exist >=1) {
  $query2 = "UPDATE userItem SET amount = amount + 1 WHERE userID = '$userID' AND itemID = '$itemID';";
}
else{
  $query2 = "INSERT INTO userItem (userID, itemID, amount) VALUES ($userID, $itemID, '1');";
}

$resultArray[1] = 1;

$result = mysqli_query($con, $query2);
if ($result){
  $resultArray[2] = 1;
}
echo $resultArray;


// $query2 = "";
// if ($exist == 1){
//   $query2 = "UPDATE userItem SET amount = amount + 1 WHERE userID = '$userID' AND itemID = '$itemID';";
// }
// else if ($exist == 0){
//   $query2 = "INSERT INTO userItem (userID, itemID, amount) VALUES ($userID, $itemID, '1');";
// }
//
mysqli_close($con);
?>
