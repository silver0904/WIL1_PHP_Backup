<?php
require "conn.php";

$username = $_POST["params0"];
$password = $_POST["params1"];
$name = $_POST["params2"];
$sHeight = $_POST["params3"];
$height = (float)$sHeight;
$sWeight = $_POST["params4"];
$weight = (float)$sWeight;
$sex = $_POST["params5"];
$petIDs = $_POST["params6"];
$petID = (int)$petIDs;
$petName = $_POST["params7"];

$query = "select max(cast(userID as signed))+1 as id from (select userID from loginTest as T) as A;";
$result = mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$newID = $row['id'];
if ($newID){
    $query2 = "insert into loginTest values ('$newID','$username','$password');";
    if (mysqli_query($con,$query2)){
        $query3 = "insert into userProfile values ('$newID','$name',$height,$weight,'$sex','');";
        if(mysqli_query($con,$query3)){
            $query4 = "insert into petProfile values ('$newID','$petID','$petName',0,0,50,0,0);";
            if (mysqli_query($con,$query4)){
                $query5 = "insert into mission (userID) values ('$newID');";
                if(mysqli_query($con,$query5)){
                    echo 1;
               }
               else{
                   echo -1;
                  }
            }
            else{
                echo -1;
            }
       }
       else{
           echo -1;
        }
    }
    else{
        echo -1;
    }
}
else{
    echo -1;
}
mysqli_close($con);
?>
