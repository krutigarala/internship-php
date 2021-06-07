<?php
//connection
$con=mysqli_connect("localhost","root","","db_internship");

if($_POST) {
	$name = $_POST['txt1'];
	$gen = $_POST['txt2'];
	$mobile = $_POST['txt3'];
	
	$i=mysqli_query($con,"insert into tbl_user(user_name,user_gender,user_mobile) values('{$name}','{$gen}','{$mobile}')")
		or die("Error:".mysqli_error($con));
		
	if($i) {
		echo "<script>alert('Record Added');</script>";
	}
}

?>



<html>
	<body>
	<form method="post">
	Name : <input type="text" name="txt1"/><br/>
	Gender :  <select name="txt2">
			  <option>Male</option>
			  <option>Female</option>
			  </select><br/>
	Mobile No : <input type="number" name="txt3"/><br/>
	<input type="submit"/>
	</form>
	</body>
</html>

<a href="day7_table.php">Display Record</a>
