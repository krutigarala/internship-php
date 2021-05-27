<form action="day1_chklogin.php" method="post" name="login">
<table align="center" border="1" cellpadding="10" cellspacing="10" width="460" height="300">
<tr>
	<td align="center" colspan="2">
	<h1 style="font-size:50px;">Login Form</h1>
</td>
</tr>
<tr>
	<td>Username</td>
	<td>
	<input type="text" name="txtunm">
	</td>
</tr>
<tr>
	<td>Password</td>
	<td><input type="password" name="txtpass"></td>
</tr>
<tr>
	<td colspan="2" align="center">
	<input type="submit" value="Login" name="login" onClick"validateForm()"/>
	</td>
</tr>
</table>
</form>
