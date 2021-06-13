<?php
include 'header.php';
?>
<tr>
<td height="455" align="center" valign="top"><div class="content" style="height:500;"><b><u><h1 style="font-size:20px;">ViewCharity</u></b></h1><br><p>
<html>
<head>
</head>
<body>
<table border="1" cellpadding="5" cellspacing="5" width="460" height="50%">
<tr>
	<th>
		Full name
	</th>
	<th>
		Address
	</th>
	<th>
		Mobile No
	</th>
	
	<th>
		Amount
	</th>	
</tr>

<?php
include 'conn.php';
$sql="select * from charity";
$res=mysqli_query($con,$sql);
?>
<?php while($result=mysqli_fetch_array($res)){?>
	<tr>
		<td>
		      <?php echo $result[1];?>
		</td>	
		<td>
		      <?php echo $result[2];?>
		</td>	
		<td>
		      <?php echo $result[3];?>
		</td>		
		
		<td>
			<?php echo $result[4];?>
		</td>	
	</tr>
<?php }?>
</table>	
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