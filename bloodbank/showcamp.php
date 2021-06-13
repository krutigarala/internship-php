<?php
include 'header.php';
?>
<tr>
<td height="455" align="center" valign="top"><div class="content" style="height:500px;"><b><u><h1 style="font-size:20px;">Show Recent Camp</u></b></h1><p>
<html>
<head>
</head>
<body>
<?php
include 'conn.php';
$id=$_GET['id'];
$sql="select * from camp_master where id=$id";
$result=mysqli_query($con,$sql);
$res=mysqli_fetch_array($result);
?>
<form action="" method="post">
<table border="1" cellpadding="5" cellspacing="10" width="460" height="400">
<tr>
	<td>Camp title</td>
	<td>
		<input type="text" name="cat" value="<?php echo $res[1];?>" readonly="readonly">
	</td>
</tr>
<tr>	
	<td>From date</td>
	<td>
		<input type="text" name="fdt" value="<?php echo $res[2];?>">
	</td>
</tr>
<tr>
	<td>To date
	</td>
	<td>
		<input type="text" name="todt" value=" <?php echo $res[3];?>">
	</td>
</tr>
<tr>
	<td>Vanue</td>
	<td>
		<input type="text" name="vanue" value="<?php echo $res[4];?>">
	</td>
</tr>
<tr>
	<td>Time</td>
	<td>
		<input type="text" name="time" value="<?php echo $res[5];?>">
	</td>		

</tr>
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