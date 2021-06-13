<?php
include 'header_admin.php';
?>
<tr>
<td height="455" align="center" valign="top"><div class="content" style=
"height:500;"><b><u><h1 style="font-size:20px;">Charity</u></b></h1><p>
<html>
<head>
<title></title>
</head>
<body>
<form action="incharity.php" method="post">
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
		<td>Mobileno</td>
		<td><input type="text" name="mono"></td>
	</tr>
	<tr>
		<td>Amount</td>
		<td><input type="text" name="amt"></td>
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