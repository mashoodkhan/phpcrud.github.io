<?php
include 'connectdb.php';
session_start();
if(!isset($_SESSION['username'])) {
  

   session_destroy();
   header("location:index.php");
}
$fname = $email = $rollno = $course = $acyear = "";
$fnameerr = $emailerr = $rollnoerr = $courseerr = $acyearerr = "";

   

if (isset($_POST['submit'])) {

	if (empty($_POST['fullname'])) {
		$fnameerr = "Enter Full name";
	}
	else
	{
		$fname = $_POST['fullname'];
	}

	if (empty($_POST['email'])) {
		$emailerr = "Enter Email";
	}
	else
	{
		$email = $_POST['email'];
	}

	if (empty($_POST['rollno'])) {
		$rollnoerr = "Enter Roll No";
	}
	else
	{
		$rollno = $_POST['rollno'];
	}

	if (empty($_POST['course'])) {
		$courseerr = "Choose Course";
	}
	else
	{
		$course = $_POST['course'];
	}

    if (empty($_POST['academicyear'])) {
		$acyearerr = "select Academic year";
	}
	else
	{
		$acyear = $_POST['academicyear'];
	}
}
	if (!empty($fname && $email && $rollno && $acyear)) {
		$insert = "INSERT INTO studenttable(fullname,email,rollno,course,academicyear)VALUES('$fname','$email','$rollno','$course','$acyear')";
		$result = mysqli_query($php,$insert);

        echo "<script>alert('Successfully Registered')</script>";
        header("location:display.php");
	}
	


?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Registration Form</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/phpcrud.css">
</head>

<body class="bg-light">
    <div class="row m-0 ">
    	<div class="col-md-6 m-0 bg-light">
    			
    		<div class="container-fluid mt-2">
    		  <div class="header text-center bg-info text-white p-4">
                <h3>STUDENT REGISTRATION</h3>

               <a href="welcome.php" class="navbar-link" style="margin: 0px; padding: 0px; float: right; color: white";><i class="fa fa-arrow-left" style="font-size: 15px;" aria-hidden= "true"></i>Go To Dashboard</a>
    
              </div>
              
    		<form method="post" action="create.php" enctype="multipart/form-data">
    			<table class="table table-dark">
    				<tr>
    					<td>
    						<label for="fullname">Fullname:</label>
    						<input type="text" name="fullname" class="form-control input-sm">
    						<?php echo "<span style = color:red;</span>".$fnameerr;?>
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<label for="email">Email:</label>
    						<input type="email" name="email" class="form-control input-sm">
    						  <?php echo "<span style = color:red;</span>".$emailerr;?>
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<label for="rollno">Roll No:</label>
    						<input type="tel" name="rollno" class="form-control input-sm">
    						<?php echo "<span style = color:red;</span>".$rollnoerr;?>
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<label for="course">Course:</label>
    						<input type="radio" id="course" name="course" value="mba">M.B.A
    						<input type="radio" name="course" value="mca">M.C.A
    						<?php echo "<span style = color:red;</span>".$courseerr;?>
    					</td>
    				</tr>
    		
    				<tr>
    					<td>
    						<label for="year">Year:</label>
    						<select name="academicyear" id="acyear" class="form-control input-sm">
    							<option value="none" selected disabled hidden>Select Year</option>
    							<option value="1st year">1st year</option>
    							<option value="2nd year">2nd year</option>
    							<option value="3rd year">3rd year</option>
    						</select>
    						 <?php echo "<span style = color:red;</span>".$acyearerr;?>
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<input type="submit" value="Register" name="submit" class="btn btn-outline-info btn-block input-sm">
    					</td>
    				</tr>
    			</table>
    			</form>
    		</div>

    		
    	</div>
    </div>
	

</body>
</html>