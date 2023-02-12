<?php

include "admin/connect.php" ;
$id =$_POST['id']; 
$coun =$_POST['count']; 
$sql2 = "SELECT * FROM cart where pro_id =$id";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
$num = $result2->num_rows;
if ($num == 1) {
$count = $row2['count'];
$sql5 = " UPDATE cart SET count='$count' where pro_id =$id ";
$result5 = $conn->query($sql5);
}else{
$sql = "SELECT * FROM products where id =$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc() ; 
$price = $row['price']  ;  
?>
<?php
if ($coun==0) {
    $sql9="INSERT INTO cart(price,user,pro_id,count) VALUES ('$price','24','$id','1')";
$result9 = $conn->query($sql9); 
}else{
    $sql3="INSERT INTO cart(price,user,pro_id,count) VALUES ('$price','24','$id','$coun')";
    $result3 = $conn->query($sql3);
}
 
}
$sql2 ="SELECT*FROM cart";
$result2 = $conn->query($sql2);
$num=$result2->num_rows;
echo "(".$num.")";

?>


                             
