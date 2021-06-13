<?php
include 'conn.php';
$donnername=$_POST['dnm'];
$bg=$_POST['bg'];
$mono=$_POST['mono'];
$add=$_POST['add'];
$city=$_POST['ct'];
$ldt=$_POST['ldt'];

$sql="insert into doner_master values('','$dnm','$bg','$mono','$add','$ct','$ldt')";
if(!mysqli_query($con,$sql))
{
	die('error:'.mysqli_error());
}
else
{
	header("location:viewdonner.php");
}
?>