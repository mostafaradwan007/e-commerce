<?php

include 'connect.php';

$id = $_POST['id'];

$update = "UPDATE messages SET view = 1 WHERE id = $id";

$query = $conn -> query($update);
if($query){
                

$sql = "SELECT * FROM messages where view = 0 ";
$result = $conn->query($sql);
$count = $result->num_rows ;
echo $count ;

}