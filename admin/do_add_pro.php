<?php
include "connect.php";

$name=$_POST['name'];
if (empty($name)) {
    echo "name not found";
    exit();
};
$decr=$_POST['decr'];
if (empty($decr)) {
    echo "description not found";
    exit();
};
$price=$_POST['price'];
if (empty($price)) {
    echo "price not found";
    exit();
};
$brand=$_POST['brand'];
if (empty($brand)) {
    echo "brand not found";
    exit();
};
$sale=$_POST['sale'];
if (empty($sale)) {
    echo "salenot found";
    exit();
};
$cat=$_POST['cat'];
if (empty($cat)) {
    echo "categorey not found";
    exit();
};
$count=$_POST['count'];
if (empty($count)) {
    echo "count not found";
    exit();
};

$imge_size = $_FILES['cover']['size']; 
$imge_tmp =  $_FILES['cover']['tmp_name']; 
$imge_error =  $_FILES['cover']['error']; 
$img_array=[];
$file_count =count($imge_size);
$arrtxt   = array("jpg","jpeg","gif","png","jfif");
for ($i=0; $i <$file_count ; $i++) { 
    $imge_name = $_FILES['cover']['name']; 


$exploud[$i]  = explode(".",$imge_name[$i]);
$explodcheck[$i] = end($exploud[$i]) ;
if ($imge_error[0] == 4) {
    echo "imge not found";
    exit();
};

if (!in_array($explodcheck[$i],$arrtxt)) {
echo "ext error" ;
exit();
}


if ($imge_size[$i] >3000000) {
    echo "size error" ;
    exit();

};
$new_imge_name = time().rand(1,100000000).$imge_name[$i];
$img_array[]=$new_imge_name ;
move_uploaded_file($imge_tmp[$i],"imge/$new_imge_name") ;

}
$imgs=implode(",",$img_array);





// $sql = "INSERT INTO products
//         (name , decr ,cover,price , brand , cat , sale , count,admin) 
//         VALUES 
//         ('$name' , '$decr' ,'$imgs','$price' , '$brand' ,'$cat' ,'$sale' ,'$count' ,'1')";

$sql="INSERT INTO products
(decr,name,cover,price,cat, sale, count, brand, rate, date, admin, Features) VALUES
 ('$decr','$name','$imgs','$price','$cat','$sale','$count','$brand','10','1-10-2002','2','0')";

if ($conn->query($sql) === TRUE) {
$last_id = $conn->insert_id;


$sql1 = "SELECT * FROM products where id = $last_id ";
                                        $result1 = $conn->query($sql1);
                                        $row1 = $result1->fetch_assoc();
                                        $idbrand = $row1['brand'];
                                        $idcat   = $row1['cat'];

$sql2 = "SELECT * FROM brand WHERE id = $idbrand  ";
                                        $result2 = $conn->query($sql2);
                                        $row2 = $result2->fetch_assoc();  
                                        $brand=$row2['name'];


$sql1 = "SELECT * FROM category WHERE id = $idcat  ";
                                        $result1 = $conn->query($sql1);
                                        $row1 = $result1->fetch_assoc() ;
                                        $cat = $row1['name'];
                                        

echo json_encode([$last_id,$name,$decr,$img_array,$price,$cat,$brand,$sale,$count]);
} else {
$conn->error;
}

































// include "connect.php" ;


// $elname=$_POST['elname'];
// if (empty($elname)) {
//     echo "name not found";
//     exit();
// };
// $decr=$_POST['decr'];
// if (empty($decr)) {
//     echo "description not found";
//     exit();
// };
// $price=$_POST['price'];
// if (empty($price)) {
//     echo "price not found";
//     exit();
// };
// $brand=$_POST['brand'];
// if (empty($brand)) {
//     echo "brand not found";
//     exit();
// };
// $sale=$_POST['sale'];
// if (empty($sale)) {
//     echo "salenot found";
//     exit();
// };
// $cat=$_POST['cat'];
// if (empty($cat)) {
//     echo "categorey not found";
//     exit();
// };
// $count=$_POST['count'];
// if (empty($count)) {
//     echo "count not found";
//     exit();
// };

// $imge_size = $_FILES['cover']['size']; 
// $imge_tmp =  $_FILES['cover']['tmp_name']; 
// $imge_error =  $_FILES['cover']['error']; 
// $img_array=[];
// $file_count =count($imge_size);
// $arrtxt   = array("jpg","jpeg","gif","png","jfif");
// for ($i=0; $i <$file_count ; $i++) { 
//     $imge_name = $_FILES['cover']['name']; 


// $exploud[$i]  = explode(".",$imge_name[$i]);
// $explodcheck[$i] = end($exploud[$i]) ;
// if ($imge_error[0] == 4) {
//     echo "imge not found";
//     exit();
// };

// if (!in_array($explodcheck[$i],$arrtxt)) {
// echo "ext error" ;
// exit();
// }


// if ($imge_size[$i] >3000000) {
//     echo "size error" ;
//     exit();

// };
// $new_imge_name = time().rand(1,100000000).$imge_name[$i];
// $img_array[]=$new_imge_name ;
// move_uploaded_file($imge_tmp[$i],"imge/$new_imge_name") ;

// }
// $imgs=implode(",",$img_array);







// $sql = "INSERT INTO products( decr, name,`cover`,`price`, `cat`, `sale`, `count`, `brand`, `rate`, `date`, `admin`) 
// VALUES 
// ('$decr','$elname','$imgs','$price','$cat','$sale','$count','$brand','70','1-10-2002','1')";

// if ($conn->query($sql) === TRUE) {
//     $last_id = $conn->insert_id;
//     $sql2="INSERT INTO `images`( `image`, `pro_id`) VALUES ('$imgs',' $last_id')";
//     $conn->query($sql2);



// } 
// else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }











// header("location:tables.php");

/*
                                        <?php
                                        $sql = "SELECT * FROM products order by id desc limit 1 ";
                                        $result = $conn->query($sql);
                                        while ($row = $result->fetch_assoc() ) {
                                        
                                        ?>

                                        <tr class = "add">
                                        <td><?php echo $row['id'];?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['decr'];?></td>
                                        <td><?php echo $row['price'];?></td>
                                        <td><?php $catid = $row['cat'];
                                        
                                        
                                            $sql1 = "SELECT * FROM category WHERE id = $catid ";
                                        $result1 = $conn->query($sql1);
                                        while ($row1 = $result1->fetch_assoc() ) {
                                        echo $row1['name'];
                                        }
                                                ?>
                                        
                                        
                                        </td>
                                        <td><?php $brandid = $row['brand'];
                                        
                                        
                                            $sql2 = "SELECT * FROM brand WHERE id = $brandid ";
                                        $result2 = $conn->query($sql2);
                                        while ($row2 = $result2->fetch_assoc() ) {
                                        echo $row2['name'];
                                        }
                                                ?></td>
                                        <td><?php echo $row['count'];?></td>
                                        <td><?php echo $row['rate'];?></td>
                                        <td><?php echo $row['sale'];?></td>
                                        <td> 
                                <a href="edit_pro.php?id=<?php echo $row['id'] ?>"><button class ="btn btn-success">Edit</button></a>
                                <a href="delete_pro.php?id=<?php echo $row['id'] ?>"><button class ="btn btn-danger">Delete</button></a></td>
                                        
                                        
                                        
                                        <?php
                                        
                                        if ($_SESSION['login']==3) {
                                        ?>


                                <?php
                                }else{}

                                        
                                        ?>
                                        
                                        
                                        
                                        </td>
                                        
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                        */
                                        ?>
                                        