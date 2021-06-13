<?php
include 'header.php';
?>
<tr>
<td height="455" align="center" valign="top"><div class="content" style=
"height:500"><b><u><h1 style="font-size:20px;">Update Request Of Blood
</u></b></h1><p>
<html>
<html>
<head>
<title></title>
</head>
<body>
<?php
include 'conn.php';
$id=$_GET['id'];
$sql="select * from request_master where id=$id";
$result=mysqli_query($con,$sql);
$res=mysqli_fetch_array($result);
?>
<form action="updtrequest.php" method="post" enctype="multipart/form-data">
<table border="0" align="center" cellpadding="10" cellspacing="10" height="400" width="80%">
<tr>
	<input type="hidden" name="hdn" value="<?php echo $res[0];?>"/>
</tr>

<tr>
	<td>Full name</td>
	<td><input type="text" name="fnm" value="<?php echo $res[1];?>"></td>
</tr>
<tr>
	<td> Address</td>
	<td><textarea name="add"><?php echo $res[2];?></textarea></td>
</tr>
<tr>
	<td>Gender</td>
	<td>
	<input type="radio" name="gender">Male
	<input type="radio" name="gender" value="<?php echo $res[3]?>">Female
	</td>
</tr>
<tr>
	<td>City</td>
	<td><input type="text" name="ct" value="<?php echo $res[4];?>"/></td>
</tr>
<tr>
	<td>Blood group</td>
	<td>
	<select name="bg">
			<option value="A+">A+</option>
			<option value="B+">B+</option>
			<option value="AB+">AB+</option>
			<option value="O+">O+</option>
			<option value="A-">A-</option>
			<option value="B-">B-</option>
			<option value="AB-">AB-</option>
			<option value="O-">O-</option>
			<?php echo $res[5];?>
	</select>
	</td>
</tr>
<tr>
	<td> Quantity</td>
	<td></td><input type="text" name="qty" value="<?php echo $res[6];?>"/></td>
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
<?php
include 'footer_1.php';
?>