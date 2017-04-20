<?php

$servername="localhost";
$username="root";
$password="";
$database="it255dz08";

$conn=mysqli_connect($servername,$username,$password);

if(!$conn) {
	die("connection is bad.". mysqli_connect_error());
}
mysqli_select_db($conn,"it255dz08");
?>	