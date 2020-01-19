<?php
require "conn.php";
//get the posted parameters
$userID = $_POST["params0"];
$itemIDs = $_POST["params1"];
$costs = $_POST["params2"];
$currencys = $_POST["params3"];

//format the parameters
$itemID = (int)$itemIDs;
$cost = (int)$costs;
$currency = (int)$currencys;


// Create the query with the parameters
$query1 = "UPDATE petProfile
	SET silver = CASE WHEN $currency = '0' THEN (silver - $cost) ELSE silver END,
    gold = CASE WHEN $currency = '1' THEN (gold - $cost) ELSE gold END
WHERE userID = '$userID';";
$result = mysqli_query($con, $query1);


if (!$result) {
  exit("error: can't execute 1st query");
}


$query2 = "SELECT 1 from userItem WHERE userID = '$userID' AND itemID = '$itemID' LIMIT 1;";
$result = mysqli_query($con, $query2);
if (!$result){
  exit("error: can't execute 2nd query");
}

$exist = mysqli_num_rows($result);

$query3 = "";
if ($exist >=1) {
  $query3 = "UPDATE userItem SET amount = amount + 1 WHERE userID = '$userID' AND itemID = '$itemID';";
}
else{
  $query3 = "INSERT INTO userItem(userID, itemID, amount) VALUES ($userID, $itemID, '1');";
}

$result = mysqli_query($con, $query3);
if (!$result){
  exit("error: can't execute 3rd query");
}


echo 1;
mysqli_close($con);
?>
