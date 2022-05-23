<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "goodies";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (mysqli_connect_errno()) {
	echo "Connection failed!";
}