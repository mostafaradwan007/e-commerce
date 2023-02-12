<?php
include "admin/connect.php" ;
$proid =$_POST['proid'];
$count =$_POST['count'];
$sql2 = "SELECT * FROM cart where pro_id =$proid";
                      $result2 = $conn->query($sql2);
                      $row2 = $result2->fetch_assoc();
                      
                      $num =$result2->num_rows;
                      if ($num==1) {
                        $sql5 = " UPDATE cart SET count='$count' where pro_id =$proid";
                         $result5 = $conn->query($sql5);
                      }else{










                        // $sql = "SELECT * FROM products where id =$proid ";
                        // $result = $conn->query($sql);
                        // $row = $result->fetch_assoc() ;
                        //  $name = $row['name']  ;  
                        //  $cover = $row['cover']  ;  
                        //  $price = $row['price']  ;  
                        
                        // //  ?>
                        //   <?php
                        //  $sql3="INSERT INTO cart(name, cover, price, admin,pro_id,count) VALUES ('$name','$cover','$price ','2','$proid','$count')";
                                       
                        //    $result3 = $conn->query($sql3);
                          
                           
                      
                      }
                      
                     
                   
                      
                                        

 print_r($_POST);
