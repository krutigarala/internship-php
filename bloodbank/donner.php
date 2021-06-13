<?php
include 'header_admin.php';
?>
<tr>
<td height="355" align="center" valign="top"><div class="content" style=
"height:500"><b><u><h1 style="font-size:20px;">Donor Detail</u></b></h1><p>
<html>
<head>
<title></title>
</head>
<body>
<form action="indonner.php" method="post">
<table border="1" align="center" cellpadding="10" cellspacing="10" width="80%" height="400">
	<tr>
		<td>Donner Name</td>
		<td>
		<input type="text" name="dnm">
		</td>
	</tr>
	
	<tr>
		<td>Blood Group</td>
		<td>
		<select name="bg">
		<option>Select Your Blood Group</option>
			<option value="a+">A+</option>
			<option value="b+">B+</option>
			<option value="ab+">AB+</option>
			<option value="o+">O+</option>
			<option value="a-">A-</option>
			<option value="b-">B-</option>
			<option value="ab-">AB-</option>
			<option value="o-">O-</option>
		</select>
		</td>
	</tr>
	
	<tr>
		<td>Mobile no</td>
		<td>
		<input type="text" name="mono">
		</td>
	</tr>
	
	<tr>
		<td>Address</td>
		<td>
		<textarea rows="2" name="add">
		</textarea>
		</td>
	</tr>
	
	<tr>
		<td>City</td>
		<td>
		<input type="text" name="ct">
		</td>
	</tr>
	
	<tr>
		<td>Last donet date</td>
		<td>
		<input type="text" name="ldt">
		</td>
	</tr>
	
	<tr>
		<td colspan="2" align="center">
		<input type="submit" value="submit">		
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