<?php
$host="localhost";
$usernm="root";
$passwd="";
$dbname="db_internship";
//connection
$con=mysqli_connect($host,$usernm,$passwd,$dbname);

//single insertion
$i=mysqli_query($con,"insert into tbl_user(user_name,user_gender,user_mobile) values('Kriti','Female','4392')")
		or die("Error".mysqli_error($con));
if($i) {
	echo "<script>alert('Record Added');</script>";
}
?>