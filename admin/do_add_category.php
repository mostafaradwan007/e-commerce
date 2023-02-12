<?php
include "connect.php" ;


$elname=$_POST['elname'];

$sql = "INSERT INTO category(name) 
VALUES
 ('$elname')";
$conn->query($sql);
header("location:category.php");

?>