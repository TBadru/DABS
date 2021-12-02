<?php include('connection3.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="book.css">
</head>
<body>
  <div class="header">
  	<h2>Admin Login</h2>
  </div>
	 
  <form align="center" method="post" action="adminlog.php">
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
  		<button type="submit" class="btn" name="submit3">Login</button>
  	</div>
  </form>
</body>
</html>