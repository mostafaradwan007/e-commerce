<?php
include "admin/connect.php" ;
$count = $_POST['count'];
$price = $_POST['price'];
$proid = $_POST['proid'];
$sql5 = " UPDATE cart SET count='$count' where pro_id =$proid ";
$result5 = $conn->query($sql5);

$price_total = 0;
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc() ) {
  $price_total  +=($row['price']*$row['count']);
}
echo $price_total;

