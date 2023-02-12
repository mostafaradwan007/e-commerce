<?php
include "connect.php" ;

 $id=$_POST['id'];
$elname=$_POST['elname'];

$sql ="UPDATE brand SET `name`='$elname' WHERE id = '$id'";
 $conn->query($sql);
header("location:brand.php");



?>