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
						
						
						
<form method="post" action="do_add_admin.php" enctype="multipart/form-data">
    <label for="">Name:</label>
<input type="text" name="elname" class="form-control"><br>
<label for="">Last Name:</label>
<input type="text" name="lastname" class="form-control"><br>
<label for="">password:</label>
<input type="password" name="password" class="form-control"><br>
<label for="">premision:</label>
<select name="pr" id="" class="form-control">
<?php
                                        $sql = "SELECT * FROM pr ";
                                        $result = $conn->query($sql);
                                        while ($row = $result->fetch_assoc() ) {
                                            ?>
<option value="<?php echo $row['id']; ?>"><?php echo $row['name'];  ?></option>
                                            <?php
                                        }
                                            ?>


</select><br>
<input  class="form-control btn btn-primary" type="submit" value="go" >
</form>


