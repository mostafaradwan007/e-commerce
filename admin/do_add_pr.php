<?php
include('connect.php');

$name = $_POST['name'];
$priv = $_POST['priv'];


$sql = "INSERT INTO pr(name, priv) VALUES ('$name','$priv')";
$conn->query($sql);



header('location:all_pr.php');

?>