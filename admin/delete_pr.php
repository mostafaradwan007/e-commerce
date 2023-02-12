<?php

include('connect.php');

$id = $_GET['id'];

$sql = "DELETE FROM pr WHERE id = '$id'";

$conn->query($sql);


header('location:all_pr.php')

?>

