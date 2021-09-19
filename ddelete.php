<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"studentdatabase");

$id = $_GET['id'];

mysqli_query($con,"DELETE FROM abhay where mobile=$id");
mysqli_close($con);
header("location:ddisplay.php"); 

?>