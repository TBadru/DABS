<?php
session_start();
$Username = "";
$Email    = "";
$errors = array(); 

//This connects to database
$db = mysqli_connect('localhost','root','','book');
//This will Register the Data
if(isset($_POST['submit'])){
  $FName = mysqli_real_escape_string($db, $_POST['FName']);
  $LName = mysqli_real_escape_string($db, $_POST['LName']);
  $Username = mysqli_real_escape_string($db, $_POST['Username']);
  $MNo = mysqli_real_escape_string($db, $_POST['MNo']);
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
  $Password = mysqli_real_escape_string($db, $_POST['Password']);
  $Gender = mysqli_real_escape_string($db, $_POST['Gender']);

//This will be use for Validation 
  if (empty($FName)) { array_push($errors, "First Name is required"); }
  if (empty($LName)) { array_push($errors, "Last Name is required"); }
  if (empty($Username)) { array_push($errors, "Username is required"); }
  if (empty($MNo)) { array_push($errors, "Phone no is required"); }
  if (empty($Email)) { array_push($errors, "Email is required"); }
  if (empty($Password)) { array_push($errors, "Password is required"); }
  if (empty($Gender)) { array_push($errors, "Gender is required"); }
 

//Once there no error,it will save to database
 if (count($errors) == 0) {
 	$query = "INSERT INTO student_data (FName, LName,Username, MNo, Email, Password, Gender) 
  			  VALUES('$FName', '$LName', '$Username','$MNo','$Email','$Password','$Gender')";
  			  mysqli_query($db, $query);
  			  $_SESSION['username'] = $Username;
  	          $_SESSION['success'] = "You are now logged in";
  	          header('location: login2.php');

 	}

// For loggin in the userpanel
if (isset($_POST['login'])){
  $Username = mysqli_real_escape_string($db, $_POST['Username']);
  $Password = mysqli_real_escape_string($db, $_POST['Password']);
//This will be use for Validation 
 if (empty($Username)) { array_push($errors, "Username is required"); }
 if (empty($Password)) { array_push($errors, "Password is required"); }

   if (count($errors) == 0) {
   	$query = "SELECT * FROM student_data WHERE Username='$Username' AND Password='$Password'";
  	$results = mysqli_query($db, $query);
   }
  
}


}
?>