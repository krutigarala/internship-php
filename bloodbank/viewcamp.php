<?php
include 'header_admin.php';
?>
<tr>
<td height="455" align="center" valign="top"><div class="content" style="height:500"><b><u><h1 style="font-size:20px;">View Camp</u></b></h1><p>
<html>
<head>
</head>
<body>
<table border="1" cellpadding="5" cellspacing="5" width="80%" height="50%" align="center">
<tr>
	<th>
		Camp title
	</th>
	<th>
		From date
	</th>
	<th>
		To date
	</th>
	
	<th>
		Vanue
	</th>
		
	<th>
		Time
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
$sql="select * from camp_master";
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
		<td>
		      <?php echo $result[5];?>
		</td>	
		
		<td>
	<a href="deletecamp.php?id=<?php echo $result[0];?>">delete</a></td>
	<td>
	<a href="editcamp.php?id=<?php echo $result[0];?>">edit
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