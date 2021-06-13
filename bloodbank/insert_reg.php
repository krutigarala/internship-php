<?php
include 'conn.php';
$fullname=$_POST['fnm'];
$birthdate=$_POST['dob'];
$age=$_POST['age'];
$bg=$_POST['bg'];
$gender=$_POST['gender'];
$weight=$_POST['weight'];
$add=$_POST['add'];
$city=$_POST['ct'];
$phno=$_POST['phno'];
$unm=$_POST['unm'];
$pwd=$_POST['pwd'];
$sql="insert into registration values('','$fullname','$birthdate','$age','$bg','$gender','$weight','$add','$city','$phno','$unm','$pwd')";
if(!mysqli_query($con,$sql))
{
	die('error:'.mysqli_error());
}
else
{
	header("location:login.php");
}
?>