<?php
include "connect.php" ;

 $id=$_POST['id'];
$elname=$_POST['fitstname'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$pr=$_POST['pr'];


$sql ="UPDATE admins SET `fitstname`='$elname',`lastname`='$lastname',`password`='$password=',`pr`='$pr'  WHERE id = '$id'";
 $conn->query($sql);
header("location:admin.php");



?>