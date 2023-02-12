<?php
include "connect.php" ;

$id=$_POST['id'];
$elname=$_POST['elname'];
$decr=$_POST['decr'];
$price=$_POST['price'];
$brand=$_POST['brand'];
$sale=$_POST['sale'];
$cat=$_POST['cat'];
$count=$_POST['count'];


$sql ="UPDATE `products`
 SET
  `decr`='$decr',`name`='$elname',`price`='$price',`cat`='$cat',`sale`='$sale',`count`='$count',`brand`='$brand',`rate`='10',`date`='1-10-2002',`admin`='1',`Features`='0' WHERE id = $id  ";

$conn->query($sql);

header("location:tables.php");


?>