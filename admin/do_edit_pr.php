<?php
include('connect.php');

$id = $_POST['id'];
$name = $_POST['name'];
$priv = $_POST['priv'];



$sql = "UPDATE pr SET name='$name', priv='$priv' WHERE id = '$id'";

$conn->query($sql);

header('location:all_pr.php');

