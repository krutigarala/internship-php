<?php
include 'header.php';
?>
<tr  >
<td height="495" align="center" valign="top"><div class="content" style="height:500"><b><u><h1 style="font-size:20px;">Search Donor</u></b></h1><p>
<html>
<head>
<title></title>
</head>
<body>
<form method="post" action="">
<table border="1" align="center" width="455" height="100">
<tr>
	<td width="100%" height="50%">search donor</td>
	<td width="100%" height="50%">
		<select name="bg">
			<option>Select Your Blood Group</option>
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
		<td colspan="2" align="center">
		<input type="submit" value="search" name="submit">		
		</td>
</tr>
<?php
include 'conn.php';
if(isset($_POST['submit']))
{
$bg=$_POST['bg'];
$sql="select * from registration where blood_group='$bg'";
$res=mysqli_query($con,$sql);
?>
<table border="1" width="200" height="50">
<tr><br><br></tr>
<tr>
		<th>FullName
		</th>
		<th>Age</th>
		<th>Blood Groop</th>
		<th>City</th>
		<th> Phno</th>	
	</tr>
	<?php while($result=mysqli_fetch_array($res)){?>
	<tr>
		<td><?php echo $result[1];?></td>
		<td><?php echo $result[3];?></td>
		<td> <?php echo $result[4];?></td>
		<td><?php echo $result[8];?></td>
		<td><?php echo $result[9];?></td>
	</tr>
		<?php }}?>
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