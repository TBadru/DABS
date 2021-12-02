<?php include('connection.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
  <div class="header">
    <h2>Register</h2>
  </div>
  
  <form method="post" action="signup.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>First Name</label>
      <input type="text" name="FName">
    </div>
    <div class="input-group">
      <label>Last Name</label>
      <input type="text" name="LName">
    </div>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="Username" value="<?php echo  $Username; ?>">
    </div>
    <div class="input-group">
      <label>Mobile No</label>
      <input type="text" name="MNo">
    <div class="input-group">
      <label>Email</label>
      <input type="Email" name="Email" value="<?php echo $Email; ?>">
      </div>
    <div class="input-group">
      <label>Password</label>
      <input type="Password" name="Password">
    </div>
    <div class="input-group">
      <label>Gender</label>
      <select id="select" name="Gender">
        <option value="Gender"></option>

      </select>
         <script>
            
            var select = document.getElementById("select"),
                     arr = ["Male","Female",];
             
             for(var i = 0; i < arr.length; i++)
             {
                 var option = document.createElement("OPTION"),
                     txt = document.createTextNode(arr[i]);
                 option.appendChild(txt);
                 option.setAttribute("value",arr[i]);
                 select.insertBefore(option,select.lastChild);
             }
             
        </script>
      </div>
    <div class="input-group">
      <button type="submit" class="btn" name="submit">Register</button>
    </div>
    <p>
      Already a Patient? <a href="login2.php">Click here to Sign in</a>
    </p>
      <p>
      <a href="index.html">Home</a>
    </p>
  </form>
</body>
</html>