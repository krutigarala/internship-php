<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["fnm"].value;
var b=document.forms["reg"]["dob"].value;
var c=document.forms["reg"]["age"].value;

var f=document.forms["reg"]["weight"].value;
var g=document.forms["reg"]["add"].value;
var h=document.forms["reg"]["ct"].value;
var i=document.forms["reg"]["phno"].value;
var j=document.forms["reg"]["unm"].value;
var k=document.forms["reg"]["pwd"].value;

if((a==null || a=="")&&(b==null || b=="")&&(c==null || c=="")&&(f==null || f=="")&&(g==null || g=="")&&(h==null || h=="")&&(i==null || i=="")&&(j==null || j=="")&&(k==null || k==""))
{
	alert("All filled must be filled out");
	return false;
}

if(a==null || a=="")
{
	alert("FullName must be filled out");
	return false;
}

if(b==null || b=="")
{
	alert("Date of birth must be filled out");
	return false;
}

if(c==null || c=="")
{
	alert("Age must be filled out");
	return false
}
if(!(c>18 && c<60))
{
	alert("Age must be in between 18 to 50");
	return false;
}
if(f==null || f=="")
{
	alert("Weight must be filled out");
	return false;
}
if((f<=45))
{
	alert("you can't donate blood");
	return false;
}

if(g==null || g=="")
{
	alert("Address must be filled out");
	return false;
}
if(h==null || h=="")
{
	alert("city must be filled out");
	return false;
}
if(i==null || i=="")
{
	alert("Phno must be filled out");
	return false;
}
if(j==null || j=="")
{
	alert("Username must be filled out");
	return false;
}
if(k==null || k=="")
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
<td height="455" align="center" valign="top"><div class="content" style="height:500"><b><u><h1 style="font-size:20px">Registration Form</u></b></h1><br><html>
<head>
<title></title>
</head>
<body>
<center>
<form action="insert_reg.php" method="post" name="reg">
<table border="0" align="center"  width="455" height="450"  cellpadding="3" cellspacing="3">
	<tr>
		<td>Full Name</td>
		<td>
		<input type="text" name="fnm">
		</td>
	</tr>
	
	<tr>
		<td>Birth Date</td>
		<td>
		<input type="text" name="dob">
		</td>
	</tr>
	
	<tr>
		<td>Age</td>
		<td>
		<input type="text" name="age">
		</td>
	</tr>
	
	<tr>
		<td>Gender</td>
		<td>
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
		</td>
	</tr>
	
	<tr>
		<td>Blood group</td>
		<td>
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
		<td>Weight</td>
		<td>
		<input type="text" name="weight">
		</td>
	</tr>
	
	<tr>
		<td>Address</td>
		<td>
		<input type="text" name="add">
		</td>
	</tr>
	
	<tr>
		<td>City</td>
		<td>
		<input type="text" name="ct">
		</td>
	</tr>
	
	<tr>
		<td>phone no</td>
		<td>
		<input type="text" name="phno">
		</td>
	</tr>
	
	<tr>
		<td>Username</td>
		<td>
		<input type="text" name="unm">
		</td>
	</tr>
	
	<tr>
		<td>Password</td>
		<td>
		<input type="password" name="pwd">
		</td>
	</tr>
	
	<tr>
		<td colspan="2" align="center">
		<input type="submit" value="Register" name="submit" onClick="return validateForm()">
		</td>
	</tr>
	
	
</table>
</form></center>
</body>
</html>
</div>
</td>
<td width="10" style="background-color:#990000" valign="top">&nbsp;</td>
<?php
include 'side_client.php';
include 'footer.php';
?>