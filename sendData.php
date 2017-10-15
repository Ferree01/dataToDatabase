<?php include("conn.php");

$input = $_GET['input'];
$sql = "INSERT INTO inputs (input) VALUES ('$input');";
mysqli_query($conn, $sql);  
