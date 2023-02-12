<?php
include 'connect.php';

$id = $_GET['id'];
$sql ="DELETE from messages where id =$id";
$result =$conn->query($sql);
header("location:message.php");
