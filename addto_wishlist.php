<?php
include "admin/connect.php" ;
$id =$_POST['id'];  
$sql = "SELECT * FROM wishlist where pro_id =$id";
$result = $conn->query($sql);
$row= $result->fetch_assoc();
$num = $result->num_rows;
if ($num == 1) {
    $sql2 ="SELECT*FROM wishlist";
    $result2 = $conn->query($sql2);
    $num=$result2->num_rows;
    echo "(".$num.")";
}else{

    $sql="INSERT INTO wishlist(pro_id,user_id) VALUES ('$id','24')";
    $result = $conn->query($sql);
 
    $sql2 ="SELECT*FROM wishlist";
    $result2 = $conn->query($sql2);
    $num=$result2->num_rows;
    echo "(".$num.")";
}

?>