<?php
include 'header_admin.php';
?>
<tr>
<td height="455" align="center" valign="top"><div class="content" style=
"height:500;">
<b><u><h1 style="font-size:20px;">Camp Detail</u></b></h1>
<p>
<html>
<head>
<title></title>
</head>
<body>
<form action="incamp.php" method="post">
<table border="1" align="center" cellpadding="10" cellspacing="10" width="80%" height="400">
	<tr>
		<td>Camp Title</td>
		<td>
		<input type="text" name="cat">
		</td>
	</tr>
	
	<tr>
		<td>From Date</td>
		<td>
			<input type="text" name="fdt">	
		</td>
	</tr>
	
	<tr>
		<td>To date</td>
		<td>
		<input type="text" name="todt">
		</td>
	</tr>
	
	<tr>
		<td>Vanue</td>
		<td>
		<input type="text" name="vanue">
		</td>
	</tr>
	
	<tr>
		<td>Time</td>
		<td>
		<input type="text" name="time">
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