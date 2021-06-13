<?php
include 'conn.php';
$id=$_GET['id'];
$sql="delete from camp_registration where id=$id";
$res=mysqli_query($con,$sql);
if($res)
{
   header("location:viewc_reg.php");
}
?>