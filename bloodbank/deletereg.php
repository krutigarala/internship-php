<?php
include 'conn.php';
$id=$_GET['id'];
$sql="delete from registration where id=$id";
$res=mysqli_query($con,$sql);
if($res)
{
   header("location:viewreg.php");
}
?>