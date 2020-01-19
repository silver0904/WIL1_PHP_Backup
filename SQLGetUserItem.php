<?php
require "conn.php";
//get the posted parameters
$userID = $_POST["params0"];
$itemIDs = $_POST["params1"];

$itemID = (int)$itemIDs;



$query2 = "SELECT * FROM itemShop as table1
LEFT JOIN (Select amount, itemID AS id from userItem where userID = '$userID') AS table2
ON (table1.itemID = table2.id)
WHERE table1.itemID = $itemID;";

$result = mysqli_query($con, $query2);
if (!$result){
  exit("error: can't execute the query");
}
echo json_encode($result->fetch_assoc());



mysqli_close($con);
?>
