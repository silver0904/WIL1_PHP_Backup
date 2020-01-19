<?php
require "conn.php";

$mon = $_POST["params0"];
$day0 = substr($mon,0,2);
$mon0 = substr($mon,2);
$tue = $_POST["params1"];
$day1 = substr($tue,0,2);
$mon1 = substr($tue,2);
$wed = $_POST["params2"];
$day2 = substr($wed,0,2);
$mon2 = substr($wed,2);
$thu = $_POST["params3"];
$day3 = substr($thu,0,2);
$mon3 = substr($thu,2);
$fri = $_POST["params4"];
$day4 = substr($fri,0,2);
$mon4 = substr($fri,2);
$sat = $_POST["params5"];
$day5 = substr($sat,0,2);
$mon5 = substr($sat,2);
$sun = $_POST["params6"];
$day6 = substr($sun,0,2);
$mon6 = substr($sun,2);

$userID = $_POST["params7"];

if (substr($mon,2) != substr($sun,2)){
    $query = "select $mon0.`$day0` as '$mon',
		$mon1.`$day1` as '$tue',
		$mon2.`$day2` as '$wed',
		$mon3.`$day3` as '$thu',
		$mon4.`$day4` as '$fri',
		$mon5.`$day5` as '$sat',
		$mon6.`$day6` as '$sun'
		from $mon0 left join $mon6 
		on $mon0.userID = $mon6.userID
		where $mon0.userID = '$userID'";
}
else{
    $query = "select $mon0.`$day0` as '$mon',
                $mon1.`$day1` as '$tue',
                $mon2.`$day2` as '$wed',
                $mon3.`$day3` as '$thu',
                $mon4.`$day4` as '$fri',
                $mon5.`$day5` as '$sat',
                $mon6.`$day6` as '$sun'
                from $mon0 where userID = '$userID'";
}


if ($result = mysqli_query($con,$query)){
    echo json_encode($result->fetch_assoc());
}
mysqli_close($con);
?>
