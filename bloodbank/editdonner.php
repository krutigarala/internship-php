<?php
include 'header.php';
?>
<tr>
<td height="455" align="center" valign="top"><div class="content" style="height:500"><b><u><h1 style="font-size:20px;">Update Donor</u></b></h1><p>
<html>
<html>
<head>
<title></title>
</head>
<body>
<?php
include 'conn.php';
$id=$_GET['id'];
$sql="select * from doner_master where id=$id";
$result=mysqli_query($con,$sql);
$res=mysqli_fetch_array($result);
?>
<form action="updtdonner.php" method="post" enctype="multipart/form-data">
<table border="0" align="center" cellpadding="10" cellspacing="10" height="400" width="80%">
<tr>
	<input type="hidden" name="hdn" value="<?php echo $res[0];?>"/>
</tr>

<tr>
	<td>
	     Donner name
	</td>
	<td>
	<input type="text" name="dnm" value="<?php echo $res[1];?>">
	</td>
</tr>

<tr>
	<td>
	     Blood group
	</td>
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
			<?php echo $res[2];?>
	</select>
	</td>
</tr>


<tr>
	<td>
	     Mobile no
	</td>
	<td>
	<input type="text" name="mono" value="<?php echo $res[3];?>"/>
	</td>
</tr>


<tr>
	<td>
	     Address
	</td>
	<td>
	<textarea name="add">
	<?php echo $res[4];?>
	</textarea>
	</td>
</tr>

<tr>
	<td>
	     City
	</td>
	<td>
		<input type="text" name="ct" value="<?php echo $res[5];?>"/>
	</td>
</tr>


<tr>
	<td>
	     Last donet date
	</td>
	<td>
	<input type="text" name="ldt" value="<?php echo $res[6];?>"/>
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
<?php
include 'footer.php';
?>