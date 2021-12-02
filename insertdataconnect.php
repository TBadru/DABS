<?php
include("dataconnect.php");
$query = "INSERT INTO STUDENT_DATA VALUES ('','Chitra','Thapa','chitra1','12345','vhi@gmail.com','123','male')";
mysqli_query($conn, $query);
if($data)
{
	echo "Data Added";
}
?>