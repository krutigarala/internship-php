<?php 
//db connect
$con = mysqli_connect("localhost","root","","db_internship");

//query
$q = mysqli_query($con,"select * from tbl_user where is_delete = 0") or die(mysqli_error($con));

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Action</th>";
echo "</tr>";

while($row = mysqli_fetch_array($q)) {
	echo "<tr>";
	echo "<td>{$row['user_id']}</td>";
	echo "<td>{$row['user_name']}</td>";
	echo "<td>{$row['user_gender']}</td>";
	echo "<td>{$row['user_mobile']}</td>";
	echo "<td><a href='day8_edit.php?editid={$row['user_id']}'>Edit</a> | <a href='day7_delete.php?deleteid={$row['user_id']}'>Delete</a></td>";
	echo "</tr>";
}
echo "</table>";

echo "<a href='day6_insertrecord.php'>Add Record</a>";

?>