<?php
include("dataconnect.php");
error_reporting(0);
$query = "SELECT * FROM TEST";
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
			<th>Name</th>
			<th>Doctor</th>
			<th>Date and Time</th>
			<th colspan="2">Operations</th>
			
		</tr>
		
	

	<?php
	while ($result = mysqli_fetch_assoc($data)) 
	{
		echo "<tr>
		      <td>".$result['name']."</td>
		      <td>".$result['doctor']."</td>
		      <td>".$result['datetime']."</td>
		      <td><a href='deletedata.php?rn=$result[name]' onclick='return checkdelete()'>Delete</a></td>
		      
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
	return confirm('Delete Appointment?');
}
</script>