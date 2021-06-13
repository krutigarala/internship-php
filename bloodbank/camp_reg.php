<?php
include 'header.php';
?>
<tr>
<td height="455" align="center" valign="top"><div class="content" style="height:500"><b><u><h1 style="font-size:20px;">Camp Registration Form</u></b></h1><br><html>
<head>
<title></title>
</head>
<body>
<center>
<form action="insert_campreg.php" method="post" name="reg">
<table border="0" align="center"  width="455" height="450"  cellpadding="3" cellspacing="3">
	<tr>
		<td>Blood Bank Name</td>
		<td><input type="text" name="bnm"></td>
	</tr>
	<tr>
		<td>Organization Name</td>
		<td><input type="text" name="org"></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><textarea name="add"></textarea></td>
	</tr>
	<tr>
		<td>Date And Time</td>
		<td><input type="text" name="dttime" /></td>
	</tr>
	<tr>
		<td>Camp Name</td>
		<td><input type="text" name="campnm" /></td>
	</tr>
	<tr>
		<td>Vanue</td>
		<td><input type="text" name="vanue"></td>
	</tr>
	<tr>
		<td>Expected Donor</td>
		<td><input type="text" name="exdo"></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
		<input type="submit" value="Register">
		</td>
	</tr>
</table>
</form>
</center>
</body>
</html>
</div>
</td>
<td width="10" style="background-color:#990000" valign="top">&nbsp;</td>
<?php
include 'side_client.php';
include 'footer.php';
?>