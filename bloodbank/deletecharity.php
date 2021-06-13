<?php
include 'conn.php';
$sql="delete from charity where id={$id}" or die(mysqli_error($con));
$res=mysqli_query($con,$sql);
if($res)
{
   header("location:viewcharity.php");
}
?>
