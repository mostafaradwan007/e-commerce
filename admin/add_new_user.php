<?php
include "connect.php" ;
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$passwordrepeat=$_POST['passwordrepeat'];

$sql = "INSERT INTO users(username,lastname,email,password) VALUES ('$firstname $lastname','$email','$password')";
$result = $conn->query($sql);
header("location:register.php");