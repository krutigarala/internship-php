<?php 
//db connect
include './connection.php';

//query
$q = mysqli_query($con,"select * from tbl_student") or die(mysqli_error($con));
//fetch data in numerical array
$row = mysqli_fetch_row($q);
//debug
print_r($row);
echo "<br/>".$row[0].$row[1].$row[2].$row[3].$row[4].$row[5].$row[6].$row[7].$row[8].$row[9].$row[10].$row[11];

//fetch data in numerical array and associative array
$row = mysqli_fetch_array($q); 
echo "<pre>";
print_r($row);
echo "<br/>".$row[0].$row[1].$row[2].$row[3].$row[4].$row[5].$row[6].$row[7].$row[8].$row[9].$row[10].$row[11];
echo "<br/>".$row['st_id'].$row['st_name'].$row['st_gender'].$row['st_dob'].$row['st_bloodgroup'].$row['st_mobile'].$row['st_email'].
        $row['st_address'].$row['st_area'].$row['st_pincode'].$row['st_password'];
?>