<?php  

include "db_vicky.php";

$sql = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($conn, $sql); 