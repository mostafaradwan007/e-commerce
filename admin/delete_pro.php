
<?php
include "connect.php" ;

$pro_id =$_POST['id_pro'];
$sql2 ="DELETE FROM `cart` WHERE pro_id = '$pro_id' " ;
$conn->query($sql2);
$sql ="DELETE FROM `products` WHERE id = '$pro_id' " ;
$conn->query($sql);



?>



<?php
$id =$_GET['id'];
$sql2 ="DELETE FROM `cart` WHERE pro_id = '$id' " ;
$conn->query($sql2);

$sql ="DELETE FROM `products` WHERE id = '$id' " ;
$conn->query($sql);
header("location:tables.php");
?>
