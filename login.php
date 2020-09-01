<?php
include 'connectdb.php';

session_start();
if(isset($_POST['login'])) {

   $uname = $_POST['username'];
   $pass  = md5($_POST['password']);

   $select = "SELECT * FROM admintable WHERE username = '$uname' and password = '$pass'";
   $result = mysqli_query($php,$select);

   $row = mysqli_fetch_array($result);

   if ($row['username'] == $uname and $row['password'] == $pass) {
     
     $_SESSION['username'] = $uname;
     header("Location:welcome.php");
     echo "<script>alert('login successful')</script>";

   }
   else

	echo "<span style=color:red>incorrect username or password</span>";
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" type="text/css" href="css/phpcrud.css">
</head>
<body>
  <div class="row">
	<div class="col-sm-6">
		<div class="loginform">
		<form method="post">
			<div class="loginhere">
				<i class="fas fa-user-circle" style="font-size: 80px; padding-left:80px;" aria-hidden="true"></i>

				<h2 class="text-center">Login Here</h2>
			</div>
	    
        <div class="form-group">
           	<label for="username">Username:</label><br>
        	  <input type="text" class="form-control-lg" name="username" placeholder="Enter Username">
        </div>

          <div class="form-group">
          	<label for="password">Password:</label><br>
        	  <input type="password" class="form-control-lg" 
            name="password" placeholder="Enter password">
          </div>

          <div class="form-group">
             <input type="submit" class="btn btn-lg btn-success btn-block" name="login" value="Login">
            </div>

          <div class="form-group">
            <a href="index.php" class="btn btn-block btn-outline-info">Signup</a>
          </div>

        </div>
		</form>
	</div>
</div>

</body>
</html>