<script type="text/javascript">
function validateForm()
{
var a=document.forms["login"]["txtunm"].value;
var b=document.forms["login"]["txtpass"].value;
if ((a==null || a=="") && (b==null || b==""))
{
alert("All Field must be filled out");
return false;
}
if(a==null || a=="")
{
alert("UserName must be filled out");
return false;
}
if(b==null || b=="")
{
alert("Password must be filled out");
return false;
}
}
</script>
<?php
include 'header.php';
?>
<tr>
<td height="455" align="center" valign="top"><div class="content" style="height:500"><b><u><h1 style="font-size:20px;">Login Form</u></b></h1><p>
<html>
<head>
</head>
<body>
<form action="chklogin.php" method="post" name="login">
<table border="1" cellpadding="10" cellspacing="10" width="460" height="300">
	<tr>
		<td>Username</td>
		<td>
		<input type="text" name="txtunm">
		</td>
	</tr>
	
	<tr>
		<td>Password</td>
		<td>
		<input type="password" name="txtpass">
		</td>
	</tr>
	
	<tr>
		<td colspan="2" align="center">
		<input type="submit" value="Login" name="login" onClick="validateForm()"/>
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