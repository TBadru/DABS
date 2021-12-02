<?php
include("dataconnect.php");
$name =$_GET['rn'];
$query = " DELETE FROM TEST WHERE name='$name'";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "Appointment Deleted";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/drake/Patientbooking.php"> 
	<?php
}
else
{
	echo "Not Deleted";
}
?>