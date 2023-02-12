
<?php
include "connect.php" ;
$id =$_GET['id'];
$sql ="DELETE FROM `admins` WHERE id = $id" ;
$conn->query($sql);
header("location:admin.php");





?>




