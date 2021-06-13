<?php
include 'header.php';
?>
<tr>
<td height="455" align="center" valign="top"><div class="content" style="height:500px;"><b><u><h1 style="font-size:20px;">Update Charity</u></b></h1><p>
<html>
<html>
<head>
<title></title>
</head>
<body>
<?php
include 'conn.php';
$id=$_GET['id'];
$sql="select * from charity where id=$id";
$result=mysqli_query($con,$sql);
$res=mysqli_fetch_array($result);
?>
<form action="updtcharity.php" method="post" enctype="multipart/form-data">
<table border="0" align="center" cellpadding="10" cellspacing="10" height="400" width="80%">
<tr>
	<input type="hidden" name="hdn" value="<?php echo $res[0];?>"/>
</tr>

<tr>
	<td>Full Name</td>
	<td>
	<input type="text" name="fnm" value="<?php echo $res[1];?>">
	</td>
</tr>
<tr>
	<td>Address</td>
	<td>
	<textarea name="add"><?php echo $res[2];?></textarea>
	</td>
</tr>
<tr>
	<td>Mobile No</td>
	<td>
	<input type="text" name="mono" value="<?php echo $res[3];?>"/>
	</td>
</tr>
<tr>
	<td>Amount</td>
	<td>
	<input type="text" name="amt" value="<?php echo $res[4];?>"/>
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
include 'footer_1.php';
?>