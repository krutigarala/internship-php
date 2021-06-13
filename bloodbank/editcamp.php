<?php
include 'header.php';
?>
<tr>
<td height="455" align="center" valign="top"><div class="content" style=
"height:500px;"><b><u><h1 style="font-size:20px;">Update Camp Detail</u></b></h1><p>
<html>
<head>
<title></title>
</head>
<body>
<?php
include 'conn.php';
$id=$_GET['id'];
$sql="select * from camp_master where id=$id";
$result=mysqli_query($con,$sql);
$res=mysqli_fetch_array($result);
?>
<form action="updtcamp.php" method="post" enctype="multipart/form-data">
<table border="0" align="center" cellpadding="10" cellspacing="10" height="400" width="80%">
<tr>
	<input type="hidden" name="hdn" value="<?php echo $res[0];?>"/>
</tr>

<tr>
	<td>
	     Camp title
	</td>
	<td>
	<input type="text" name="cat" value="<?php echo $res[1];?>">
	</td>
</tr>

<tr>
	<td>
	     From Date
	</td>
	<td>
	<input type="text" name="fdt" value="<?php echo $res[2];?>">
	</td>
</tr>


<tr>
	<td>
	     To Date
	</td>
	<td>
	<input type="text" name="todt" value="<?php echo $res[3];?>"/>
	</td>
</tr>


<tr>
	<td>
	     Vanue
	</td>
	<td>
	<input type="text" name="vanue" value="<?php echo $res[4];?>"/>
	
	</td>
</tr>

<tr>
	<td>
	     Time
	</td>
	<td>
		<input type="text" name="time" value="<?php echo $res[5];?>"/>
	</td>
</tr>

<tr>
	<td colspan="2" align="center">
		<input type="submit" value="update">
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