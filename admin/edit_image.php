
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
						


<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">all images</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">images</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name of image</th>
                        <th> image</th>
                        <th>pro_id</th>
                        <th>conrtol</th>
                    </tr>
                </thead>
          
                <tbody>
                    <?php
                    $sql = "SELECT * FROM images";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc() ) {
                        ?>

                         <tr>
                        <td><?php echo $row['id'];?></td>
                        <td>
                        <?php
                        $img = explode(",",$row['image']);
                        for ($i=0; $i < count($img); $i++) { 
                            echo "<pre>";
                            echo "(";   echo $i+1 ;echo ")";  echo $img[$i];
                        echo "</pre>";
                        }
                        ?>
                        
                        
                        
                        </td> 
                        <td><?php 
                                          
                                            $img = explode(",",$row['image']);
                                            
                                            for ($i=0; $i <count($img); $i++) { 
                                               
                                            
                                            
                                          
                                        ?>
                                            <img src="imge/<?php echo $img[$i] ?> "alt="">
                                          <?php  
                                        }
                                            
                                            ?>
                                               
                                            
                                           
                                            
                                        </td>         
<br>
<td><?php echo $row['pro_id'];?></td>

                    </td>
                        <td> 
            <a href="edit_cover.php?id=<?php echo $row['id'] ?>"><button class ="btn btn-success">Edit</button></a>
          
                       </tr>
                        <?php
                    }
                    ?>
               
                    <style>
                        img{
                            width: 120px;
                        }
                    </style>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>












<input   class="form-control btn btn-success" type="submit" value="go" >
</form>
<?php

}?>

