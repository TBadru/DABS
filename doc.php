<?php

$db = mysqli_connect("localhost","root","","book");

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$doctor = $_POST['doctor'];
	$datetime = $_POST['datetime'];
	
	if(!$datetime){
		echo $datetime;
	}else{
		
		$query = "INSERT INTO test (name,doctor,datetime) VALUES ('$name','$doctor','$datetime')";
		$run_query = mysqli_query($db, $query);
		
		if($run_query){
			echo "Booking Confirm on: ".$datetime.",With: ".$doctor."";
			header('location: userpanel.html');
			
		}else{
echo "Booking Error! Please try again";
		}
	}	
}
