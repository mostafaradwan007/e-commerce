<?php
include "connect.php" ;


$elname=$_POST['elname'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$pr=$_POST['pr'];

$sql = "INSERT INTO `admins`( `fitstname`, `lastname`, `password`, `pr`)
 VALUES
 ('$elname','$lastname','$password','$pr')";
$conn->query($sql);
header("location:admin.php");

?>