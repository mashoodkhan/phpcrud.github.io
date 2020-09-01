<?php

session_start();
if(!isset($_SESSION['username'])) {
  
   session_destroy();
   header("location:index.php");
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" type="text/css" href="css/phpcrud.css">
</head>
<style>
  *{margin: 0;padding: 0;box-sizing: border-box; overflow: hidden;}
</style>
<body>

<div class="row m-0">
	<div class="col-md-3 m-0 p-1 bg-dark">
		<h4 class="bg-dark">STUDENT DETAILS</h4>

         <div class="dashoboard p-5 ">

          	<h5 class="text-white"><a style="color: white" href="#">DASHBOARD</a></h5>
            <i class="fa fa-user" style="color: #00ff00; padding-left: 50px;" aria-hidden="true">
            </i>
            <br>
            <h3 style="color: #00ff00;">Activeuser</h3>
            <i style="color: #00ff00;" class="fas fa-check-circle"></i>
            <?php echo " <span style = color:white;</span>".$_SESSION['username'];?>

         </div>
       
         <div class="table table-dark ">
     
          <table class="table table-dark text-center">
         	<tr><td class="p-4"><a class="text-white" style="text-decoration: none;" href="create.php">Create</a></td></tr>
            <tr><td class="p-4"><a class="text-white" style="text-decoration: none;" href="display.php">Display</a></td></tr>
         	<tr><td class="p-4"><a class="text-white" style="text-decoration: none;" href="update.php">Update</a></td></tr>
         	<tr><td class="p-4"><a class="text-white" style="text-decoration: none;" href="delete.php">Delete</a></td></tr>
         	  <tr><td class="p-4"><a class="text-white" style="text-decoration: none;" href="logout.php">logout</a></td></tr>
 
         </table>
 
         </div>
      
	</div>
	 <div class="col-md-9 text-center bg-info text-white">
       	<h2 class="p-2" style="font-family: sans-serif; font-size: 45px;">Welcome To Admin Panel</h2><hr class="bg-light">

        <div class="card-columns">

            <div class="card bg-dark" style="width: 250px;height: 500px;margin-left: 20%">

               <img src="images/rs.jpg" class="card-img-top" alt="Registerd Users">

                <div class="card-body text-center">

                 <h4 class="card-title">Registered Users </h4>
                 <p class="card-text">Number of users who are Registered.</p>
                 <form method="POST" action="registeredusers.php">
                  <input type="submit" name="submit" value="checkhere" class="btn btn-outline-info">
                 </form>

            </div>

        </div>

            <div class="card bg-dark" style="width: 250px;margin-left: 70%;height: 500px;">
             <img src="images/rstudent.jpg" class="card-img-top" alt="Registerd Users">
             <div class="card-body text-center ">
               <h4 class="card-title">Registered Students </h4>
               <p class="card-text">Number of students who are Registered in database.</p>
               <form method="POST" action="registeredstudents.php">
             <input type="submit" name="submit" value="checkhere" class="btn btn-outline-info">
             </form>
             </div>

           </div>
    </div>
  </div>

	
</div>



</div>
</body>
</html>