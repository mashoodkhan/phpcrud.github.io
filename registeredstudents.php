<?php
include 'connectdb.php';
session_start();
if(!isset($_SESSION['username'])) {
  
   session_destroy();
   header("location:index.php");
}
if (isset($_POST['submit'])) {

  
 $select = "SELECT * FROM studenttable";
 $query  = mysqli_query($php,$select);

 $count  = mysqli_num_rows($query);

 echo "No. of Registered Students =".$count;

 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registered Users</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/phpcrud.css">
</head>
<body>
<div class="container container-fluid">
	<div class="header text-center bg-info text-white p-4">
		<h3>REGISTERED STUDENTS</h3>

		<a href="welcome.php" class="navbar-link" style="margin: 0px; padding: 0px; float: right; color: white";><i class="fa fa-arrow-left" style="font-size: 15px;" aria-hidden= "true"></i>Go To Dashboard</a>
	
	</div>
	<div class="table">
	<table class="table table-light table-bordered text-center bg-secondary text-white">
		<th>ID</th>
		<th>FULLNAME</th>
		<th>EMAIL</th>
		<th>ROll NO</th>
		<th>COURSE</th>
		<th>YEAR</th>
		<?php while($row = mysqli_fetch_array($query)):?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['fullname'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['rollno'];?></td>
			<td><?php echo $row['course'];?></td>
			<td><?php echo $row['academicyear'];?></td>
		</tr>
	<?php endwhile;?>
	</table>
	</div>
</div>	


</body>
</html>