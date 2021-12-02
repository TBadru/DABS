<?php include('connection2.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Patient Login</title>
  <link rel="stylesheet" type="text/css" href="login2.css">
</head>
<body>
  <div class="header">
  	<h2>Patient Login</h2>
  </div>
	 
  <form method="post" action="login2.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
      <label>Username</label>
      <input type="text" name="Username" value="<?php echo  $Username; ?>">
    </div>
  	<div class="input-group">
      <label>Password</label>
      <input type="Password" name="Password">
    </div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="submit2">Login</button>
  	</div>
  	<p>
  		Not a patient yet? <a href="signup.php">Click here to Sign up</a>
  	</p>
    <p>
      <a href="index.html">Home</a>
    </p>
  </form>
</body>
</html>