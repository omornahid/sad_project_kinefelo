<?php  

include "db_conn.php";

$sql = "SELECT * FROM `order` ORDER BY `order_id` DESC"; 
$result = mysqli_query($conn, $sql);
