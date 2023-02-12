
<?php
include "connect.php" ;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">



<?php

include "inc/desine/menu.php";
include "inc/desine/header.php";

?>







<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
	 
<?php
$id =$_GET['id'] ;
include("connect.php");

$sqlp = "SELECT * FROM products where id=$id" ;

$resultp = $conn->query($sqlp);

while($rowp = $resultp->fetch_assoc()){
    ?>					
						
<form method="post" action="do_edit_pro.php" enctype="multipart/form-data">
    <label for="">Name:</label>
<input type="text" name="elname" class="form-control" value="<?php echo $rowp['name'] ?>"><br>

<label for="">decr:</label><br>
<textarea style="width:100% ; height:400px"  name="decr" value="<?php echo $rowp['decr'] ?>"></textarea><br>
 
<label for="">cover:</label><br>
<input type="file" name="cover" class="form-control"><br>



<label for="">price:</label><br>
<input type="text" name="price" class="form-control" value="<?php echo $rowp['price'] ?>"><br>

<label for="">brand:</label>
<select name="brand" id="" class="form-control" >

<?php


$sql = "SELECT * FROM brand " ;

$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
?>

<option  value="<?php echo $row['id'] ?>"> <?php echo $row['name']?></option>
    <?php
    }
?>
</select>

<br>
<label for="">category:</label>
<select name="cat" id="" class="form-control">

<?php


$sql = "SELECT * FROM category " ;

$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
?>

<option  value="<?php echo $row['id'] ?>"> <?php echo $row['name']?></option>
    <?php
    }
?>
</select>

<br>
<label for="">sale:</label><br>
<input type="text" name="sale" class="form-control" value="<?php echo $rowp['sale'] ?>"><br>

<input type="hidden" name="id" class="form-control" value="<?php echo $rowp['id'] ?>"><br>
<label for="">count:</label><br>
<input type="text" name="count" class="form-control" value="<?php echo $rowp['count'] ?>"><br>
<input   class="form-control btn btn-success" type="submit" value="go" >
</form>
<?php

}?>

