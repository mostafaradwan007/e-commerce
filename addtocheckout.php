<?php
include "admin/connect.php" ;
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$company=$_POST['company'];
$country=$_POST['country'];
$address=$_POST['address'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$city2=$_POST['city2'];  
$sql="INSERT INTO checkout(`FIRST NAME`, `LAST NAME`, `EMAIL ADDRESS`, `PHONE NUMBER`, `COMPANY NAME (OPTIONAL)`, `COUNTRY`, `ADDRESS LINE 1`, `ADDRESS LINE 2`, `TOWN/CITY`, `STATE/COUNTY`) VALUES 
('$firstname','$lastname','$email','$phone','$company','$country','$address','$address2','$city','$city2')";
$result = $conn->query($sql);
    header("location:checkout.php");