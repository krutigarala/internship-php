<?php
include 'header_admin.php';
?>
<tr>
<td height="455" align="center" valign="top"><div class="content" style="height:500"><b><u><h1 style="font-size:20px;">View Registration</u></b></h1><br><p>
<html>
<head>
</head>
<body>
<table border="1" cellpadding="5" cellspacing="5" width="80%" height="50%" align="center">
<tr>
	<th>
		Full Name
	</th>
	<th>
		Birth Date
	</th>
	<th>
		Age
	</th>
	
	<th>
		Blood Group
	</th>
	<th>
		Gender
	</th>
		
	<th>
		Weight
	</th>
	<th>
		Address
	</th>
	
	<th>
		city
	</th>
	<th>
		Phone No.
	</th>
	<th>
		Delete
	</th>	
	
</tr>
<?php
include 'conn.php';
$sql="select * from registration";
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
		      <?php echo $res[7];?>
		</td>	
		<td>
		      <?php echo $res[8];?>
		</td>		
		
		<td>
			<?php echo $res[9];?>
		</td>
		
		<td>
		<a href="deletereg.php?id=<?php echo $res[0];?>">delete</a>
	</td>
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