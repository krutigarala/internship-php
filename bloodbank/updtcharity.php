<?php
include 'conn.php';
$hdn=$_POST['hdn'];
$fullname=$_POST['fnm'];
$address=$_POST['add'];
$mo_no=$_POST['mono'];
$amt=$_POST['amt'];

$qury="UPDATE `charity` SET `fullname`='$fullname',`address` = '$address',`mo_no` = '$mo_no',`amt` = '$amt' WHERE `id` =$hdn";
$res=mysqli_query($con,$qury);
if($res)
{
header("location:viewcharity.php");
}
?>