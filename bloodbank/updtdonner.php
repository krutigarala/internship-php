<?php
include 'conn.php';
$hdn=$_POST['hdn'];
$doner_nm=$_POST['dnm'];
$b_grp=$_POST['bg'];
$mo_no=$_POST['mono'];
$add=$_POST['add'];
$city=$_POST['ct'];
$last_donet_dt=$_POST['ldt'];

$qury="UPDATE `doner_master` SET `doner_nm`='$doner_nm',`b_grp` = '$b_grp',`mo_no` = '$mo_no',`add` = '$add',`city` = '$city',`last_donet_dt` = '$last_donet_dt' WHERE `id` =$hdn";
$res=mysqli_query($qury,$con);
if($res)
{
header("location:viewdonner.php");
}
?>