<?php
include "admin/connect.php" ;
$id=$_POST['id'];
$sql="DELETE FROM `wishlist` WHERE pro_id=$id";
$result = $conn->query($sql);
?>
<?php
$sql2 ="SELECT*FROM wishlist";
$result2 = $conn->query($sql2);
$num=$result2->num_rows;
echo "(".$num.")";


?>