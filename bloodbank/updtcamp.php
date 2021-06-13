<?php
include 'conn.php';
$hdn=$_POST['hdn'];
$camp_title=$_POST['cat'];
$frm_dt=$_POST['fdt'];
$to_dt=$_POST['todt'];
$vanue=$_POST['vanue'];
$time=$_POST['time'];

$qury="UPDATE `camp_master` SET `camp_title`='$camp_title',`frm_dt` = '$frm_dt',`to_dt` = '$to_dt',`vanue` = '$vanue',`time` = '$time' WHERE `id` =$hdn";
$res=mysqli_query($qury,$con);
if($res)
{
header("location:viewcamp.php");
}
?>