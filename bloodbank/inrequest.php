<?php
include 'conn.php';
$fullname=$_POST['fnm'];
$address=$_POST['add'];
$gender=$_POST['gender'];
$city=$_POST['ct'];
$b_grp=$_POST['bg'];
$qty=$_POST['qty'];

$sql="insert into request_master values('','$fullname','$address','$gender','$city','$b_grp','$qty')";
if(!mysqli_query($con,$sql))
{
	die('error:'.mysqli_error());
}
else
{
	header("location:viewrequest.php");
}
?>