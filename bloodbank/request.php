<?php
include 'header.php';
?>
<tr>
<td height="455" align="center" valign="top"><div class="content" style="height:500"><b><u><h1 style="font-size:20px;">Request Of Blood</u></b></h1><p>
<html>
<head>
<title></title>
</head>
<body>
<form action="inrequest.php" method="post">
<table border="1" align="center" cellpadding="10" cellspacing="10" width="80%" height="400">
	<tr>
		<td>Fullname</td>
		<td><input type="text" name="fnm"></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><textarea rows="2" name="add"></textarea></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td>
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
		</td>
	</tr>
	<tr>
		<td>City</td>
		<td><input type="text" name="ct"></td>
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
		</select>
		</td>
	</tr>
	<tr>
		<td>Quality</td>
		<td><input type="text" name="qty"></td>
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
include 'footer.php';
?>