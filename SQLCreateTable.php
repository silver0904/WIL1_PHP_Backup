<?php
require "conn.php";
$table = date("MY");

$query = "CREATE TABLE test.`$table` (`userID` VARCHAR(45) NOT NULL, `01` INT DEFAULT 0, `02` INT DEFAULT 0, `03` INT DEFAULT 0, `04` INT DEFAULT 0, `05` INT DEFAULT 0, `06` INT DEFAULT 0, `07` INT DEFAULT 0,`08` INT DEFAULT 0, `09` INT DEFAULT 0, `10` INT DEFAULT 0, `11` INT DEFAULT 0, `12` INT DEFAULT 0, `13` INT DEFAULT 0, `14` INT DEFAULT 0,`15` INT DEFAULT 0, `16` INT DEFAULT 0, `17` INT DEFAULT 0, `18` INT DEFAULT 0, `19` INT DEFAULT 0, `20` INT DEFAULT 0, `21` INT DEFAULT 0,`22` INT DEFAULT 0, `23` INT DEFAULT 0, `24` INT DEFAULT 0, `25` INT DEFAULT 0, `26` INT DEFAULT 0, `27` INT DEFAULT 0, `28` INT DEFAULT 0,`29` INT DEFAULT 0, `30` INT DEFAULT 0, `31` INT DEFAULT 0, PRIMARY KEY (userID));";
$result = "";
try{
    $result = mysqli_query($con,$query);
} catch (Exception $e){
    echo 'Exception: ', $e->getMessage(),'\n';
}
if($result){
  echo "$table";
}
else{
  echo "failed";
}
mysqli_close($con);
?>
