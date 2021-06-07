<?php 
//db connect
$con = mysqli_connect("localhost","root","","db_internship");

$eid = $_GET['editid'];
//select data from table
$editq = mysqli_query($con,"select * from tbl_user where user_id='{$eid}'") or die(mysqli_error($con));
$editdata = mysqli_fetch_array($editq);
//print_r($editdata);

if($_POST) {
	$txt1 = $_POST['txt1'];
	$txt2 = $_POST['txt2'];
	$txt3 = $_POST['txt3'];

	$updateq=mysqli_query($con,"update tbl_user set 	user_name='{$txt1}',user_gender='{$txt2}',user_mobile='{$txt3}' where user_id='{$eid}'") or die(mysqli_error($con));
	if($updateq) {
		echo "<script>alert('Record Updated');
			  window.location='day7_table.php';</script>";
	}
}
?>



<html>
	<body>
	<form method="post">
		Name: <input type="text" value="<?php echo $editdata['user_name'];?>" name="txt1"/>
		<br/>
		Gender:   Male<input type="radio" <?php if($editdata['user_gender']=="Male") { echo "checked";}?> value="Male" name="txt2">
		
		Female<input type="radio" <?php if($editdata['user_gender']=="Female") { echo "checked";}?> value="Female" name="txt2">
		
		
		<br/>
		Mobile: <input type="text" value="<?php echo $editdata['user_mobile'];?>" name="txt3"/>		
		<br/>
		<input type="submit"/>
	</form>
	</body>
</html>









