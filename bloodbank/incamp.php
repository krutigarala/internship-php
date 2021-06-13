<?php
include 'conn.php';
$campt=$_POST['cat'];
$frmdt=$_POST['fdt'];
$todt=$_POST['todt'];
$vanue=$_POST['vanue'];
$time=$_POST['time'];

$sql="insert into camp_master values('','$cat','$fdt','$todt','$vanue','$time')";
if(!mysqli_query($con,$sql))
{
	die('error:'.mysqli_error());
}
else
{
	header("location:viewcamp.php");
}
?>