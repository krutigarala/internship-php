<?php
if($_POST['txtunm']==""||$_POST['txtpass']=="")
{
	header("location:login.php");
}
else
{
	
	session_start();
	include 'conn.php';
	$unm=$_POST['txtunm'];
	$pwd=$_POST['txtpass'];

$sql="select * from registration where username='$unm'&&password='$pwd'";
	
$res=mysqli_query($con,$sql);
$result=mysqli_fetch_array($res);
$count=mysqli_num_rows($res);

if($result[10]=="admin" && $result[11]=="admin")
{
	$_SESSION['id']=$result[0];
	$_SESSION['username']=$result[10];
	header("location:home.php");
}
else
{
	if($count==0)
	{
		echo "<script>alert('you are not registered');</script>";
	}
	else
	{
		$_SESSION['id']=$result[0];
		$_SESSION['username']=$result[10];
		header("location:index.php");
	}
	
}

}
?>