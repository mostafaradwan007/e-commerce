<?php
include "connect.php" ;


$elname=$_POST['elname'];

$sql = "INSERT INTO `brand`(`name`) 
VALUES
 ('$elname')";
$conn->query($sql);
header("location:brand.php");

?>