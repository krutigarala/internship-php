<?php
//db connect
include './connection.php';

$deid = $_GET['deleteid'];

//delete query for developers
$deleteq = mysqli_query($con,"update tbl_student set is_delete = 1 where st_id = '{$deid}'")or die(mysqli_error($con));

//simple delete query 
//$deleteq = mysqli_query($con,"delete from tbl_user where user_id='{$id}'") or die(mysqli_error($con));

if($deleteq) {
	echo "<script>alert('Record Deleted');window.location='day7_table.php';</script>";
}

?>