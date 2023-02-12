
<?php
include "connect.php" ;
$id =$_GET['id'];
$sql ="DELETE FROM `category` WHERE id = $id" ;
$conn->query($sql);
header("location:category.php");





?>




