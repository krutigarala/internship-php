<?php
include 'header_admin.php';
?>
<tr>
<td height="455" align="center" valign="top"><div class="content" style="height:500"><b><u><h1>View Donor</u></b></h1><p>
<html>
<head>
</head>
<body>
<table border="1" cellpadding="5" cellspacing="5" width="80%" height="50%" align="center">
<tr>
	<th>
		Doner name
	</th>
	<th>
		Blood group
	</th>
	<th>
		Mobile no
	</th>
	
	<th>
		Address
	</th>
		
	<th width="50">
		City
	</th>	
	
	<th>
		Last donner date
	</th>
	
	<th>
		Delete
	</th>	
	
	<th>
		Edit
	</th>		
</tr>
<?php
include 'conn.php';
$sql="select * from doner_master";
$result=mysqli_query($con,$sql);
?>
<?php while($res=mysqli_fetch_array($result)){?>
	<tr>
		<td>
		      <?php echo $res[1];?>
		</td>	
		<td>
		      <?php echo $res[2];?>
		</td>	
		<td>
		      <?php echo $res[3];?>
		</td>		
		
		<td>
			<?php echo $res[4];?>
		</td>	
		<td>
		      <?php echo $res[5];?>
		</td>	
		<td>
		      <?php echo $res[6];?>
		</td>	
		
		<td>
	<a href="deletedonner.php?id=<?php echo $res[0];?>">delete</a></td>
	<td>
	<a href="editdonner.php?id=<?php echo $res[0];?>">edit
    </a></td>
	</tr>
<?php }?>
</table>	
</body>
</html>	
</p>
</div>
</td>
<?php
include 'footer_1.php';
?>	