<?php
require "conn.php";
$table = date("MY",strtotime("-1 month"));
$query = "DROP TABLE test.$table";
$result = mysqli_query($con,$query);
if ($result){
  echo "$table deleted \n";
}
else{
  echo "$table failed to delete \n";
}
mysqli_close($con);
?>
