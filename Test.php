<!DOCTYPE html>
<html>
<head>
  <title>Send SMS</title>
  <link rel="stylesheet" type="text/css" href="adminlog.css">
</head>
<body>
  <div class="header">
  	<h2>Send SmS</h2>
  </div>
	 
  <form method="post">
  	<div class="input-group">
      <label>Mobile No</label>
      <input type="text" name="num" placeholder="Enter No">
    </div>
  	<div class="input-group">
      <label>Country Code</label>
      <select>
    <option value="">Select.</option>
    <option value="44">UK +44</option>
      </select>
    </div>
      <div class="input-group">
      <label>Message</label>
      <textarea rows="6" cols="50" name="message"placeholder="Type Message" ></textarea>
    </div>
    </div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="Send">Send</button>
  	</div>
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