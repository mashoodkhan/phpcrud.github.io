<?php
include 'connectdb.php';

$id  =   $_GET['id'];

$del="DELETE FROM studenttable WHERE id = $id";
$res = mysqli_query($php,$del);
header("location:delete.php");



?>