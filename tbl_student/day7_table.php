<?php 
//db connect
$con = mysqli_connect("localhost","root","","db_internship");

//query
$q = mysqli_query($con,"select * from tbl_student where is_delete = 0") or die(mysqli_error($con));

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Date Of Birth</th>";
echo "<th>Blood Group</th>";
echo "<th>Mobile</th>";
echo "<th>Email</th>";
echo "<th>Address</th>";
echo "<th>Area</th>";
echo "<th>Pincode</th>";
echo "<th>Password</th>";
echo "<th>Action</th>";
echo "</tr>";

while($row = mysqli_fetch_array($q)) {
	echo "<tr>";
	echo "<td>{$row['st_id']}</td>";
	echo "<td>{$row['st_name']}</td>";
	echo "<td>{$row['st_gender']}</td>";
	echo "<td>{$row['st_dob']}</td>";
        echo "<td>{$row['st_bloodgroup']}</td>";
        echo "<td>{$row['st_mobile']}</td>";
        echo "<td>{$row['st_email']}</td>";
        echo "<td>{$row['st_address']}</td>";
        echo "<td>{$row['st_area']}</td>";
        echo "<td>{$row['st_pincode']}</td>";
        echo "<td>{$row['st_password']}</td>";
	echo "<td><a href='day8_edit.php?editid={$row['st_id']}'>Edit</a> | <a href='day7_delete.php?deleteid={$row['st_id']}'>Delete</a></td>";
	echo "</tr>";
}
echo "</table>";
echo "<a href='day6_insert_table.php'>Add Record</a>";
?>
