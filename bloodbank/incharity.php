<?php
include 'conn.php';
$fullname=$_POST['fnm'];
$address=$_POST['add'];
$mo_no=$_POST['mono'];
$amt=$_POST['amt'];

$sql="insert into charity values('','$fnm','$add','$mono','$amt')";
if(!mysqli_query($con,$sql))
{
	die('error:'.mysqli_error());
}
else
{
	header("location:viewcharity.php");
}
?>