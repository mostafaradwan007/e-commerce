<?php
$id = $_POST['id'];
$pro_id =$_POST['pro_id'];
// echo json_encode([$id,$pro_id]);
include "admin/connect.php" ;
$sql ="DELETE FROM cart where pro_id=$pro_id and id=$id";
 $conn->query($sql);
$sql2 ="SELECT*FROM cart";
$result2 = $conn->query($sql2);
$num=$result2->num_rows;
echo "(".$num.")";
?>