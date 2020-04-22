<?php 
$id= $_POST["id"];
$status= $_POST["status"];
// $id=2;
session_start();


$sql = "INSERT INTO `booking`(`id`, `availability`) 
                        VALUES ('$id'','$status')
                        ON DUPLICATE KEY UPDATE
                        `availability`='$status'";

// echo $sql;
if ($conn->query($sql) === TRUE) {
   
    echo "1";
 
}
 else {

     echo "0";
}

?>