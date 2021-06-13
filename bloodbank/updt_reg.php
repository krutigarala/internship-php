<?php
include 'conn.php';
$hdn=$_POST['hdn'];
$fullname=$_POST['fnm'];
$birthdate=$_POST['bdt'];
$age=$_POST['age'];
$blood_group=$_POST['bg'];
$gender=$_POST['gender'];
$weight=$_POST['weight'];
$address=$_POST['add'];
$city=$_POST['ct'];
$phno=$_POST['phno'];
$username=$_POST['unm'];
$password=$_POST['pwd'];


$qury="UPDATE `registration` SET `fullname`='$fullname',`birthdate` = '$birthdate',`age` = '$age',`blood_group` = '$blood_group',`gender` = '$gender',`weight` = '$weight',`address`='$address',`city`='$city',`phno`='$phno' ,`username`='$username',`password`='$password' WHERE `id` =$hdn";
$res=mysqli_query($qury,$con);
if($res)
{
header("location:login.php");
}
?>