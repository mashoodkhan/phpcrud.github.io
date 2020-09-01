<?php

include 'connectdb.php';

if (isset($_POST['submit'])) {
	
	$id     = $_POST['id'];
	$fname  = $_POST['fullname'];
	$email  = $_POST['email'];
	$rollno = $_POST['rollno'];
	$course = $_POST['course'];
	$year   = $_POST['academicyear'];

$update = "UPDATE studenttable SET id = '$id',fullname = '$fname',
email = '$email',rollno = '$rollno',course = '$course',
academicyear = '$year' WHERE id = $id";
$query = mysqli_query($php,$update);
header("location:update.php");
}

?>