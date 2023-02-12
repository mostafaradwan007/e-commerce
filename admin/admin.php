<?php
include "connect.php" ;
session_start();
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
        <!-- Begin Page Content -->
        <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">all admins</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">admins</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>last name</th>
                        <th>password</th>
                        <th>premision</th>
                        <th>conrtol</th>
                    </tr>
                </thead>
          
                <tbody>
                <?php
                if ($_SESSION['login']==3) {
                     ?>
                    <?php
                    $sql = "SELECT * FROM admins  ";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc() ) {
                        ?>

                         <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['fitstname'];?></td>
                        <td><?php echo $row['lastname'];?></td>
                        <td><?php echo $row['password'];?></td>
                        <td><?php $pr = $row['pr'];
                         $sql1 = "SELECT * FROM pr where  id= $pr ";
                         $result1 = $conn->query($sql1);
                         while ($row1 = $result1->fetch_assoc() ) {
                          echo $row1['name'];
                         }
                             ?>
                        
                        
                        
                        
                        </td>
                        
                    </td>
                        <td> 
            <a href="edit_admin.php?id=<?php echo $row['id'] ?>"><button class ="btn btn-success">Edit</button></a>
            <a href="delete_admin.php?id=<?php echo $row['id'] ?>"><button class ="btn btn-danger">Delete</button></a></td>
                       </tr>
                        <?php
                    }
                    ?>
                <?php
                                           }else{

                                           }?>
                    <?php
                if ($_SESSION['login']==2) {
                     ?>
                    <?php
                    $sql = "SELECT * FROM admins where pr = 2 ";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc() ) {
                        ?>

                         <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['fitstname'];?></td>
                        <td><?php echo $row['lastname'];?></td>
                        <td><?php echo $row['password'];?></td>
                        <td><?php $pr = $row['pr'];
                         $sql1 = "SELECT * FROM pr where  id= $pr ";
                         $result1 = $conn->query($sql1);
                         while ($row1 = $result1->fetch_assoc() ) {
                          echo $row1['name'];
                         }
                             ?>
                        
                        
                        
                        
                        </td>
                        
                    </td>
                        <td> 
            <a href="edit_admin.php?id=<?php echo $row['id'] ?>"><button class ="btn btn-success">Edit</button></a>
            <a href="delete_admin.php?id=<?php echo $row['id'] ?>"><button class ="btn btn-danger">Delete</button></a></td>
                       </tr>
                        <?php
                    }
                    ?>
                <?php
                                           }else{

                                           }?>
                                                 <?php
                if ($_SESSION['login']==2) {
                     ?>
                    <?php
                    $sql = "SELECT * FROM admins where pr = 15 ";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc() ) {
                        ?>

                         <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['fitstname'];?></td>
                        <td><?php echo $row['lastname'];?></td>
                        <td><?php echo $row['password'];?></td>
                        <td><?php $pr = $row['pr'];
                         $sql1 = "SELECT * FROM pr where  id= $pr ";
                         $result1 = $conn->query($sql1);
                         while ($row1 = $result1->fetch_assoc() ) {
                          echo $row1['name'];
                         }
                             ?>
                        
                        
                        
                        
                        </td>
                        
                    </td>
                        <td> 
            <a href="edit_admin.php?id=<?php echo $row['id'] ?>"><button class ="btn btn-success">Edit</button></a>
            <a href="delete_admin.php?id=<?php echo $row['id'] ?>"><button class ="btn btn-danger">Delete</button></a></td>
                       </tr>
                        <?php
                    }
                    ?>
                <?php
                                           }else{

                                           }?>
                                            <?php
                if ($_SESSION['login']==1) {
                     ?>
                    <?php
                    $sql = "SELECT * FROM admins where pr = 15 ";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc() ) {
                        ?>

                         <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['fitstname'];?></td>
                        <td><?php echo $row['lastname'];?></td>
                        <td><?php echo $row['password'];?></td>
                        <td><?php $pr = $row['pr'];
                         $sql1 = "SELECT * FROM pr where  id= $pr ";
                         $result1 = $conn->query($sql1);
                         while ($row1 = $result1->fetch_assoc() ) {
                          echo $row1['name'];
                         }
                             ?>
                        
                        
                        
                        
                        </td>
                        
                    </td>
                        <td> 
            <a href="edit_admin.php?id=<?php echo $row['id'] ?>"><button class ="btn btn-success">Edit</button></a>
            <a href="delete_admin.php?id=<?php echo $row['id'] ?>"><button class ="btn btn-danger">Delete</button></a></td>
                       </tr>
                        <?php
                    }
                    ?>
                <?php
                                           }else{

                                           }?>
                    
                </tbody>
            </table><a href="add_new_admin.php">
<button class="btn btn-primary">Add new</button>
</a>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
    <span>Copyright &copy; Your Website 2020</span>
</div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
<div class="modal-footer">
<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
<a class="btn btn-primary" href="login.html">Logout</a>
</div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
<style>
img{
width:120px ;
height:auto;
}
</style>
</body>

</html>