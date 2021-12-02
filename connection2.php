<?php
$Username = "";
$errors = array(); 

$db = mysqli_connect('localhost','root','','book');

if (isset($_POST['submit2'])){
  $Username = mysqli_real_escape_string($db, $_POST['Username']);
  $Password = mysqli_real_escape_string($db, $_POST['Password']);
//This will be use for Validation 
 if (empty($Username)) { array_push($errors, "Username is required"); }
 if (empty($Password)) { array_push($errors, "Password is required"); }

   if (count($errors) == 0) {
   	$query = "SELECT * FROM student_data WHERE Username='$Username' AND Password='$Password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $Username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: userpanel.html');
   }else {
  		array_push($errors, "Wrong username/password combination");

  }
}
}