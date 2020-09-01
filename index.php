<?php
include 'connectdb.php';
session_start();
$fname = $uname = $email = $telno = $pass = "";
$fnameerr = $unameerr = $emailerr = $telnoerr = $passerr
 = "";
if (isset($_POST['submit'])) {

    if (empty($_POST['fullname'])) {
       $fnameerr = "Enter Full Name";
    }

    else{
	$fname = $_POST['fullname'];
    }


    if (empty($_POST['username'])) {
       $unameerr = "Enter Username";
    }


    else{
        $uname = $_POST['username'];
    }

	if (empty($_POST['email'])) {
        $emailerr = "Enter Email";
    }

    else{
        $email = $_POST['email'];
    }


    if (empty($_POST['tel'])) {
       $telnoerr = "Enter Mobile no:";
    }

    else{
     $telno = $_POST['tel'];   
    }


    if (empty($_POST['password'])) {
     $passerr = "Enter any Password";
    }

    else{

    $pass  = md5($_POST['password']);  
    }
	}

if (!empty($fname && $uname && $email && $telno && $pass)) {


    $store  = "INSERT INTO admintable(       
               fullname,username,email,tel,password) 
               VALUES('$fname','$uname','$email','$telno','$pass')";
               
    $result = mysqli_query($php,$store);

    echo "<script>alert('Signup Successful')</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/phpcrud.css">
	   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body class="bg-light">

  <div class="container"> 
	  <div class="row">
	  	<div class="col-sm-4">
	  		<h3 class="text-danger">PHP CRUD OPERATION</h3>
	  		<p style="color: white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            <p style="color: white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>

	   	</div>
	  	<div class="col-sm-6 bg-secondary">
	  		<div class="heading">
	  		<h4 style="color: white; border: solid 3px grey;">ADMIN's REGISTRATION</h4></div>
         <form method="post">
         	
           <div class="form-group">
           	<i class="fa fa-user" style="color: white;" aria-hidden="true"></i>
           	<label for="fullname" class="text-warning">Full Name:</label>
     		<input type="text" name="fullname" class="form-control p-3" placeholder="Enter full name">
            <?php echo "<span style = color:red;</span>".$fnameerr;?>
     	   </div>
     	    <div class="form-group">
     	    <i class="fa fa-user-circle" style="color: white;" aria-hidden="true"></i>
     	    <label for="username" class="text-warning">User Name:</label>
     		<input type="text" name="username" class="form-control" placeholder="Enter user name">
            <?php echo "<span style = color:red;</span>".$unameerr;?>
     	   </div>
     	    <div class="form-group">
            <i class="fas fa-envelope-open" style="color: white;"></i>
     	    <label for="email"class="text-warning">Email:</label>
     		<input type="email" name="email" class="form-control" placeholder="Enter Email">
            <?php echo "<span style = color:red;</span>".$emailerr;?>
     	   </div>
     	    <div class="form-group">
 	    	<i class="fas fa-mobile" style="color: white;" aria-hidden= "true"></i>
 	    	<label for="contact no" class="text-warning">Contact No:</label>
     		<input type="tel" name="tel" class="form-control" placeholder="Enter Contact no:">
            <?php echo "<span style = color:red;</span>".$telnoerr;?>
     	   </div>
            <div class="form-group">
            <i class="fas fa-eye" style="color: white;"></i>
            <label for="contact no" class="text-warning">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password:">
            <?php echo "<span style = color:red;</span>".$passerr;?>
           </div>
           
     	   <div class="form-group">
     	   <input type="submit" name="submit" value="Signup" class="btn btn-primary">
           <a class="btn btn-outline-success" style="color: white; border-color: white;" href="login.php">login Here</a>
     	   </div>
     	   
     	  
         </form>
        </div>
      </div>
    </div>
  

</body>
</html>