<?php
include 'conn.php';
$id=$_GET['id'];
$sql="delete from doner_master where id=$id";
$res=mysqli_query($con,$sql);
if($res)
{
   header("location:viewdonner.php");
}
?>