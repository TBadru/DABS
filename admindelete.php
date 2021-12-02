<?php
include("dataconnect.php");
$FName =$_GET['fn'];
$query = " DELETE FROM STUDENT_DATA WHERE FName='$FName'";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "Patient Details Deleted";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/fake/PatientDetails.php"> 
	<?php
}
else
{
	echo "Not Deleted";
}
?>