<?php
include "connect.php" ;

 $id=$_POST['id'];
$cover=$_POST['cover'];
$sql ="UPDATE images SET `cover`='$cover' WHERE id = '$id'";
 $conn->query($sql);




?>