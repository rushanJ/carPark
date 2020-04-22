<?php 
$id= $_POST["id"];
// $id=2;
session_start();

$uniId=$_SESSION["uniId"];
$shedule=$_SESSION["shedule"];
$start=$_SESSION["start"];
$end=$_SESSION["end"];
//$end=$_SESSION["uniId"];
include_once "config.php";

$sql = "INSERT INTO `seat_booking`(`id`, `user`, `shedule`, `start`, `end`, `fee`, `seat_no`) 
                        VALUES ('',$uniId,'$shedule','$start','$end','$end','$id')";

// echo $sql;
if ($conn->query($sql) === TRUE) {
    $sql = "UPDATE `bus_shedule` SET `no_of_passengers` = `no_of_passengers`+1 WHERE `bus_shedule`.`id` = $shedule";
    if ($conn->query($sql) === TRUE) {

    echo "1";
 }
}
 else {

     echo "0";
}

?>