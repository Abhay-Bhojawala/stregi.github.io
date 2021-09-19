<?php
$con = mysqli_connect("localhost","root","");
$dbname="studentdatabase";

if (!$con)
{
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
  exit;
}

$sqldb = "CREATE DATABASE IF NOT EXISTS $dbname";

if (!mysqli_query($con,$sqldb))
{
  echo "Error creating database: " . mysqli_error($con);
}
mysqli_select_db($con,"studentdatabase");

$sql_insert="CREATE TABLE IF NOT EXISTS abhay(fname text NOT NULL,lname text NOT NULL,age integer NOT NULL,email text NOT NULL,date_of_birth date NOT NULL,gender text NOT NULL,department text NOT NULL,college text NOT NULL,mobile bigint NOT NULL,address text NOT NULL,PRIMARY KEY (`mobile`))";

if(!mysqli_query($con,$sql_insert))
{
  echo "Error creating table: " . mysqli_error($con);
  exit;
}

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$age=$_POST["age"];
$email=$_POST["email"];
$date_of_birth=$_POST["date_of_birth"];
$gender=$_POST["gender"];
$department=$_POST["department"];
$college=$_POST["college"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];

$sql="INSERT INTO abhay(fname,lname,age,email,date_of_birth,gender,department,college,mobile,address) VALUES ('$fname','$lname',$age,'$email','$date_of_birth','$gender','$department','$college',$mobile,'$address')";

if (!mysqli_query($con,$sql))
{
  echo "Error inserting data: " . mysqli_error($con);
}

header("location:ddisplay.php");
?>