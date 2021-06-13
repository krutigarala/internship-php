<?php
include 'header.php';
?>
<tr>
<td height="455" align="center" valign="top"><div class="content" style=
"height:500px;"><b><u><h1 style="font-size:20px;">Update Registration Form</u></b></h1><p>
<html>
<head>
<title></title>
</head>
<body>
<?php
include 'conn.php';
$id=$_SESSION['id'];
$sql="select * from registration where id='$id'";
$result=mysqli_query($con,$sql);
$res=mysqli_fetch_array($result);
?>
<form action="updt_reg.php" method="post" enctype="multipart/form-data">
<table border="0" align="center" height="400" width="470" cellpadding="3" cellspacing="3">
<tr>
	<input type="hidden" name="hdn" value="<?php echo $res[0];?>"/>
</tr>
<tr>
	<td> Full Name</td>
	<td>
	<input type="text" name="fnm" value="<?php echo $res[1];?>">
	</td>
</tr>
<tr>
	<td>Birth date</td>
	<td>
	<input type="text" name="bdt" value="<?php echo $res[2];?>"/>
	</td>
</tr>
<tr>
	<td>Age</td>
	<td>
	<input type="text" name="age" value="<?php echo $res[3];?>"/>
	</td>
</tr>
<tr>
	<td>Blood group</td>
	<td>
	<select name="bg">
			<option value="a+">A+</option>
			<option value="b+">B+</option>
			<option value="ab+">AB+</option>
			<option value="o+">O+</option>
			<option value="a-">A-</option>
			<option value="b-">B-</option>
			<option value="ab-">AB-</option>
			<option value="o-">O-</option>
			<?php echo $res[4];?>
	</select>
	</td>
</tr>
<tr>
	<td>Gender</td>
	<td>
	<input type="radio" name="gender">Male
	<input type="radio" name="gender" value="<?php echo $res[5]?>">Female
	</td>
</tr>
<tr>
	<td>Weight</td>
	<td>
	<input type="text" name="weight" value="<?php echo $res[6];?>"/>
	</td>
</tr>
<tr>
	<td>Address</td>
	<td>
	<textarea name="add"><?php echo $res[7];?></textarea>
	</td>
</tr>
<tr>
	<td>City</td>
	<td>
		<input type="text" name="ct" value="<?php echo $res[8];?>"/>
	</td>
</tr>
<tr>
	<td>Phone No</td>
	<td>
	<input type="text" name="phno" value="<?php echo $res[9];?>"/>
	</td>
</tr>
<tr>
		<td>Username</td>
		<td>
		<input type="text" name="unm" value="<?php echo $res[10];?>"/>
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>
		<input type="password" name="pwd" value="<?php echo $res[11];?>">
		</td>
	</tr>
<tr>
	<td colspan="2" align="center">
		<input type="submit" value="update">
	</td>
</tr>
</table>
</form>
</body>
</html>
</p>
</div>
</td>
<td width="10" style="background-color:#990000" valign="top">&nbsp;</td>
<?php
include 'side_client.php';
include 'footer.php';
?>