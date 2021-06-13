<?php
include 'conn.php';
$hdn=$_POST['hdn'];
$fullname=$_POST['fnm'];
$address=$_POST['add'];
$gender=$_POST['gender'];
$city=$_POST['ct'];
$b_grp=$_POST['bg'];
$qty=$_POST['qty'];
$qury="UPDATE `request_master` SET `fullname`='$fullname',`address` = '$address',`gender` = '$gender',`address` = '$address',`b_grp` = '$b_grp',`qty` = '$qty' WHERE `id` =$hdn";
$res=mysqli_query($qury,$con);
if($res)
{
header("location:viewrequest.php");
}
?>