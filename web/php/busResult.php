<?php

session_start();

$uniId=$_SESSION["uniId"];
$date=$_SESSION["date"];
$rout=$_SESSION["rout"];
$start=$_SESSION["start"];
$end=$_SESSION["end"];

include_once "config.php";

$sql = "SELECT * FROM `bus_shedule` WHERE `date`='$date' AND `route`='$rout' ;";



$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row["id"];
        $bus=$row["bus"];
        $no_of_passengers=$row["no_of_passengers"];
        $driverName=$row["driverName"];
        $driverContact=$row["driverContact"];
        $remark=$row["remarks"];



        echo 
        "
<li>
    <a href='php/selectedBus.php?shedule=$id& bus=$bus'>
        <img  class ='busImg' src ='images/$bus.jpeg'> 
        <h3> 
        $bus
        </h3>
        <h5> 
        $no_of_passengers passengers
        </h5>
        <h5> Driver Name : $driverName  </h5>
        <h5> Driver Contact : $driverContact  </h5>
        <h5> Remark : $remark  </h5>

    </a>
   
</li>
        ";
    }

} 
$conn->close();





  ?> 