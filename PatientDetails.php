<?php
include("dataconnect.php");
error_reporting(0);
$query = "SELECT * FROM STUDENT_DATA";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total !=0)
{?>

	<style type="text/css">
	table{
			border-collapse: collapse;
			width: 50%;
			color: #990033;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
		th{
			background-color: #990033;
			color:white;
		}
		tr:nth-child(even) {background-color: #f2f2f2}
	</style>	

	<div align="center">

	<table border="2" >
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Mobile No</th>
			<th>Email</th>
			<th>Password</th>
			<th>Gender</th>
			<th colspan="2">Operations</th>
			
		</tr>
		
	

	<?php
	while ($result = mysqli_fetch_assoc($data)) 
	{
		echo "<tr>
		      <td>".$result['ID']."</td>
		      <td>".$result['FName']."</td>
		      <td>".$result['LName']."</td>
		      <td>".$result['Username']."</td>
		      <td>".$result['MNo']."</td>
		      <td>".$result['Email']."</td>
		      <td>".$result['Password']."</td>
		      <td>".$result['Gender']."</td>
		      <td><a href='Editpatient.php?id=$result[ID]&fn=$result[FName]&ln=$result[LName]&un=$result[Username]&mo=$result[MNo]&em=$result[Email]&pn=$result[Password]&gn=$result[Gender]'>Edit</a></td>
		      <td><a href='admindelete.php?fn=$result[FName]' onclick='return checkdelete()'>Delete</a></td>
		      
		</tr>";
	}
}
else
{
 echo "No Records were found";
}
?>
</table>
<script>
	function checkdelete()
{
	return confirm('Delete Patient Details?');
}
</script>