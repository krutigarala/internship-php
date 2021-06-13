<?php
include 'header.php';
?>
<tr>
<td height="455" align="center" valign="top">
<div class="content" style="height:500px;">
<b><u><h1 style="font-size:20px;">Update Camp Registration Detail</u></b></h1>
<p>
<html>
<head>
<title></title>
</head>
<body>
<?php
include 'conn.php';
$id=$_GET['id'];
$sql="select * from camp_registration where id=$id";
$result=mysqli_query($con,$sql);
$res=mysqli_fetch_array($result);
?>
<form action="updtc_reg.php" method="post" enctype="multipart/form-data">
<table border="0" align="center" cellpadding="10" cellspacing="10" height
="400" width="80%">
<tr>
	<input type="hidden" name="hdn" value="<?php echo $res[0];?>"/>
</tr>

<tr>
	<td>Bloodbankname</td>
	<td>
	<input type="text" name="bnm" value="<?php echo $res[1];?>">
	</td>
</tr>
<tr>
	<td> Organizationname</td>
	<td>
	<input type="text" name="orgnm" value="<?php echo $res[2];?>">
	</td>
</tr>
<tr>
	<td>Address</td>
	<td>
	<input type="text" name="add" value="<?php echo $res[3];?>"/>
	</td>
</tr>
<tr>
	<td>Date_time</td>
	<td>
	<input type="text" name="dttime" value="<?php echo $res[4];?>"/>
	</td>
</tr>
<tr>
	<td> Campname</td>
	<td>
		<input type="text" name="campnm" value="<?php echo $res[5];?>"/>
	</td>
</tr>
<tr>
	<td>Vanue</td>
	<td>
		<input type="text" name="vanue" value="<?php echo $res[6];?>"/>
	</td>
</tr>
<tr>
	<td> Expecteddonor</td>
	<td>
		<input type="text" name="exdo" value="<?php echo $res[7];?>"/>
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