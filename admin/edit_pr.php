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

        <!-- Sidebar -->


        <?php
include('connect.php');
include('inc/desine/menu.php');
include('inc/desine/header.php');

?>
<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
				




<?php
$id = $_GET['id'];
$sql1 = "SELECT * FROM pr WHERE id = '$id' ";
$result1 = $conn->query($sql1);
while ($row1 = $result1->fetch_assoc()) {
 ?>



<form method="post" action="do_edit_pr.php"  enctype= "multipart/form-data">


<label >Name:</label>
<input type="text" name="name" class="form-control" value="<?php echo $row1['name']  ?>"><br>

<label >priv:</label>
<input type="text" name="priv" class="form-control" value="<?php echo $row1['priv']  ?>"><br>

<input type="hidden" name="id" value="<?php echo $row1['id']  ?>">
<input type="submit" value="add" class="btn btn-primary">
</form>

<?php
}
?>