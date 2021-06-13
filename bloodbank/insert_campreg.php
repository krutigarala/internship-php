<?php
include 'conn.php';
$bloodbanknm=$_POST['bnm'];
$orgnm=$_POST['org'];
$address=$_POST['add'];
$date_time=$_POST['dttime'];
$campnm=$_POST['campnm'];
$vanue=$_POST['vanue'];
$exdonor=$_POST['exdo'];

$sql="insert into camp_registration values('','$bloodbanknm','$orgnm','$address','$date_time','$campnm','$vanue','$exdonor')";
if(!mysqli_query($con,$sql))
{
	die('error:'.mysqli_error());
}
else
{
	header("location:login.php");
}
?>