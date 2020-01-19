<?php
require "conn.php";
$ID = $_POST["params0"];
$query = "SELECT DISTINCT T1.userID, T1.petID, T1.name, T1.level, T1.exp, T1.love, T2.species, T1.silver, T1.gold
FROM petProfile AS T1, pet AS T2
WHERE T1.petID = T2.petID
AND T1.level = T2.level
AND userID ='$ID';";

if ($result = mysqli_query($con,$query)){
    echo json_encode($result->fetch_assoc());
}
mysqli_close($con);
?>
