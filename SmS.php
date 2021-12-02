<!DOCTYPE html>
<html>
<head>
	<title>Send SMS</title>
	<style>
            body{
                background-image: url("Wallpaper.png");
            }
            form{
                background: #217bae;
                padding:30px;
                width:500px;
                margin:auto;
                font-size: 20px;
                color: white;
                font-family: Verdana;
            }
            input[name=message] {
                width:100%;
                padding:5px;
                margin-top: 20px;
                font-size: 18px;
                font-family: Verdana;
                border: none;
            }
            input[name=num] {
                width:60%;
                padding:2px;
                margin-top: 10px;
                font-size: 18px;
                font-family: Verdana;
                border: none;
            }
            input[name=Send]{
                width: 40%;
                margin-left: 150px;
                background: #531ddb;
                color:window;
                border:none;
                padding: 10px;
                border-radius: 20px;
                
                
            }
        </style>
</head>
<body>
	<h1 style="color: red; text-align: center;">Send SMS to Patients</h1>

<form method="post">
	<label>Mobile Number:</label>
	<input type="text" name="num" placeholder="Enter No">
	<br><br>
	<label>Country Code</label>
	<select name="Code">
		<option value="">Select.</option>
		<option value="44">UK +44</option>
	</select>
	<br><br>
	<tr>
	Message:</td>
<td><textarea rows="6" cols="50" name="message"placeholder="Type Message" ></textarea></td>

	<input type="submit" name="Send">

</form>

</body>
</html>

<?php

	if (isset($_POST["Send"])) {
		
	
	// Authorisation details.
	$username = "barlin.mgr@gmail.com";
	$hash = "2f9856517762c3acc9def8e61a833d7da6e5487d95991aa2013811238e2ce46d";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "DABS"; // This is who the message appears to be from.
	$numbers = $_POST["Code"] . $_POST["num"]; //Grabs the number from input text "num".
	$message = $_POST["message"];      //grabs the message from input text"message".
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);

	if (!$result) {
		?>
		<script>alert('message not sent!')</script>
	<?php
}
else{
	#print the final result
	echo $result;
?>
<script>alert('message sent!')</script>
<?php
}
}
?>



