<?php

//connection
include './connection.php';

//insert query
$i=mysqli_query($con,"insert into tbl_student(st_name,st_gender,st_dob,st_bloodgroup,st_mobile,st_email,st_address,st_area,st_pincode,st_password) values('Kriti','Female','1998-02-10','a+','9429544392','kritz@gmail.com','radharaman app.','nikol','382350', 'abc@123')")
		or die("Error".mysqli_error($con));	
if($i) {
	echo "<script>alert('Record Added');window.location='day7_table.php';</script>";
}
?>


