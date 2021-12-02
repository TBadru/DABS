<?php
$servername= "localhost";
$username= "root";
$password = "";
$dbname = "book";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	echo "";
}
else
{
	die("connection failed beacuse".mysqli_connect_error());
}
?>