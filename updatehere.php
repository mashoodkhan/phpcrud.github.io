<?php
include 'connectdb.php';
$id     =    $_GET['id'];

$query  = "SELECT * FROM studenttable";
$result =  mysqli_query($php,$query);
$row    =  mysqli_fetch_array($result);


$rid      = $row['id'];
$fname   = $row['fullname'];
$email   = $row['email'];
$rollno  = $row['rollno'];
$course  = $row['course'];
$year    = $row['academicyear'];



?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/phpcrud.css">
</head>


<body>
    <div class="row m-0">
        <div class="col-md-6 m-0">
                
         <div class="container container-fluid ml-5">
            <div class="header">
               <h5 class="text-center bg-info p-2 text-white">Update Student Details
               <a href="update.php" class="pl-5 text-secondary">go back</a>
                </h5>
            </div>
           
            <form method="POST" action="updateop.php" class="myform">
                <table class="table table-dark">
                     <tr>
                        <td>
                            <label for="id">ID</label>
                            <input type="id" name="id" class="form-control" readonly 
                            value="<?php echo $_GET['id'];?>">
                        </td>
                    </tr>
      
                    <tr>
                        <td>
                            <label for="fullname">Fullname:</label>
                            <input type="text" name="fullname" class="form-control input-sm">
                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control input-sm">
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="rollno">Roll No:</label>
                            <input type="tel" name="rollno" class="form-control input-sm">
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="course">Course:</label>
                            <input type="radio" class="radio" name="course" value="mba">M.B.A
                            <input type="radio" name="course" class="radio" value="mca">M.C.A
                            
                        </td>
                    </tr>
            
                    <tr>
                        <td>
                            <label for="academicyear">Year:</label>
                            <select name="academicyear" id="acyear" class="form-control input-sm">
                                <option value="none" selected disabled hidden>Year</option>
                                <option value="1st year">1st year</option>
                                <option value="2nd year">2nd year</option>
                                <option value="3rd year">3rd year</option>
                            </select>
                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" name="submit" class="btn btn-success btn-block "><a href="updateop.php" class="text-white">Save</a></button>
                        </td>
                    </tr>
                </table>
              </form>
            </div>

            
        </div>
    </div>
    

</body>
</html>