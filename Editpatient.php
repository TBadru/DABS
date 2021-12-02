<?php
include("dataconnect.php");
error_reporting(0);
 $_GET['id'];
 $_GET['fn'];
 $_GET['ln'];
 $_GET['un'];
 $_GET['mo'];
 $_GET['em'];
 $_GET['pn'];
 $_GET['gn'];
?>
<html>
<head>
	<title>Edit Patient Data</title>
	<link rel="stylesheet" type="text/css" href="editpatient.css">
</head>
<body>
	  <div class="header">
  	<h2>Edit Patient Details</h2>
  </div>
<form action="" method="GET">
	ID   <input type="text" name="ID" value="<?php echo $_GET['id']; ?>"/><br><br>
	First Name   <input type="text" name="FName" value="<?php echo $_GET['fn']; ?>"/><br><br>
	Last Name    <input type="text" name="LName" value="<?php echo $_GET['ln']; ?>"/><br><br>
	Username     <input type="text" name="Username" value="<?php echo $_GET['un']; ?>"/><br><br>
	Mobile No    <input type="text" name="MNo" value="<?php echo $_GET['mo']; ?>"/><br><br>
	Email        <input type="text" name="Email" value="<?php echo $_GET['em']; ?>"/><br><br>
	Password     <input type="text" name="Password" value="<?php echo $_GET['pn']; ?>"/><br><br>
	Gender       <input type="text" name="Gender" value="<?php echo $_GET['gn']; ?>"/><br><br>
	<input type="submit" name="submit" value="update"/>
	<a class="button" href="adminpanel.html">Home</a>
	
	


</form>
<?php
if($_GET['submit'])
{
$ID=$_GET['ID'];
$FName=$_GET['FName'];
$LName=$_GET['LName'];
$Username=$_GET['Username'];
$MNo=$_GET['MNo'];
$Email=$_GET['Email'];
$Password=$_GET['Password'];
$Gender=$_GET['Gender'];
$query = " UPDATE STUDENT_DATA SET FName='$FName', LName='$LName',Username='$Username',MNo='$MNo',Email='$Email',Password='$Password',Gender='$Gender' WHERE ID='$ID'";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "Details Updated Sucessfully";
}
else
{
	echo "Details Update Failed";
}
}
else
{
	echo "<font color='red'><p align=centre>Press Update Button to save changes</p>";	
}
?>
	
</body>
</html>