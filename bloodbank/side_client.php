<td valign="top"  style="background-color:#990000">
<table width="200" border="0" height="300">
<tr>
<td height=100" align="center" valign="top" bgcolor="#FECF87"
style="border-radius:30px;">
<div class="login_content">
<div align="center">
<div class="news_events">
</div >
<table height="200" width="200"cellspacing="10" valign="top" border="0"  style="border-radius:10px;font-family:Monotype Corsiva;">
<tr>
<td align="center" bgcolor="white" style="text-decoration:blink;border-radius:30px;font-family:Monotype Corsiva;font-size:25px;" >
<a href="search_donor.php">Search Donors</a>
</td>
</tr>
<tr >
<td   bgcolor="white" align="center"  style="text-decoration:blink;border-radius:30px;font-family:Monotype Corsiva;font-size:25px;" >
<a href="request_client.php">Request Blood</a>
</td>
</tr>

<tr >
<td   bgcolor="white" align="center"  style="text-decoration:blink;border-radius:30px;font-family:Monotype Corsiva;font-size:25px;" >
<a href="showcharity.php">View Charity</a>
</td>
</tr>

<tr >
<td  bgcolor="white" align="center"  style="text-decoration:blink;border-radius:30px;font-family:Monotype Corsiva;font-size:25px;" >
<a href="blood_tips.php">Blood Tips</a>
</td>
</tr></table>
<tr><td><br>
<table bgcolor="#FECF87" align="center" style="border-radius:30px;" width="230" height="100px">
<tr><td><br><br>
<table bgcolor="Red" align="center" style="border-radius:30px;font-family:Monotype Corsiva;"><tr><td align="center"><b><h1 style="text-decoration:blink;color:white;font-size:30px;">Recent Camp</h1></b></td></tr></table>
</td></tr>
<?php
include 'conn.php';
$sql="select * from camp_master";
$result=mysqli_query($con,$sql);
?>
</td>
</tr>
<tr>
<td>
<marquee onmouseover="javascript:stop();"onmouseout="javascript:start();" direction="up">
<?php while($res=mysqli_fetch_array($result)){?>

		<a href="showcamp.php?id=<?php echo $res[0];?>"><font size=3><?php echo $res[1]."  From: ".$res[2];?></font></a><br />

	<?php } ?></marquee></td></tr><tr><td align="center">
	<img src="bb15.gif" width="180" height="100"><br><a href="">Show</a><br/><br/></td></tr>
</table></td></tr>
</td>
<br/>
<tr>
<tr><td height="0" valign="bottom"></td></tr></table></td></tr></table></td></tr><tr><td><br></td></tr><tr><td><!--//-->
<table width="100%" border="0" cellpadding="0" cellspacing="0" background="images/footer_bg.gif"><tr><td width="13" align="left">
<img src="images/footer_left.gif" width="13" height="47" /></td>