<style>
a:hover 
{

    font-family:Aria;
    font-size:15px;
    background:White;
}
</style>
<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="verify-v1" content="pYcKmg4SUfZ2RJqnWHzvQE/9Y964BVDx4gQSPI6oGGo=" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Blood Bank India is an online blood bank application, which allow donors to register thier details. People can find donors online in need of bloods. The moto of this project is 'Save a Life'." />

<title>Blood Bank India | Blood Donors India | Online Blood Bank | Save a Life | Find Blood Donors</title> 

<meta name="author" content="Blood Bank India">
<meta name="distribution" content="Global">
<meta name="language" content="en-uk">
<meta name="Webmaster" content="www.usistech.com ~ + 91 422 2461790">
<link rel="shortcut icon" href="images/bbi_favicon.png">

<script type="text/javascript">var pageTracker = _gat._getTracker("UA-4373694-6");
pageTracker._initData();
pageTracker._trackPageview();
</script> 

<link href="css/main.css" rel="stylesheet" type="text/css" /><link href="css/png_fix.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr>
	<td align="center" class="bg_leafs">
	<table width="738" border="0" cellspacing="0" cellpadding="0" class="wrapper">
	<tr>
	<td>

<table width="100%" border="0" cellpadding="0" cellspacing="0" class="header" >
<tr>
	<td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td>
	</td>
	<td align="left" valign="top">
	<div id="header_contain">
	                  <div id="logo"> 
                        <!--<a href="index.php"> -->
                        <img src="images/bloodbanklogo.png" width="414" height="140" border="0" /></a> 
                      </div>
	<div id="sitemap_links"><br><br>
	<div>
	<?php
	if(empty($_SESSION['username']))
	{?> 
	<a href="login.php" Style="font-size:15px">Login</a> 
	<?php
	}else{?>
	<a href="logout.php" Style="font-size:15px">Logout</a>
	<?php }?>
	</div></div></div>
	</td>
	<td align="right"></td>
	</tr>
	</table>
	</td>
	</tr>
	</table><!--//--></td></tr>
	<tr>
		<td align="center"><table width="715" border="0" cellspacing="0" cellpadding="0">
	
	<tr>
		<td>
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="main_menu">
	
	<tr>
		<td width="10" align="left">
		<img src="images/main_menu_left.gif" alt="Main Menu" width="10" height="41" />
		</td>
		
		<td align="center" valign="middle">
		<table border="0" cellspacing="0" cellpadding="5">
	<tr>
		<td align="center" style="color: #680803;font-size:15px">
		<a href="home.php">Home
		</a>
		</td>
		<td align="center">
		<img src="images/menu_sep.gif" alt="|" width="1" height="20" />
		</td>
		
		
		
		


		
<?php
if(empty($_SESSION['username']))
{
?>
<td align="center">
<a href="contact_us.php" style="color: #680803;font-size:15px">Contact us
</a>
</td>
<?php
}else{
?>
<td align="center">
<a href="edit_reg.php" style="color: #680803;font-size:15px">
Edit Profile
</a>
<a href="#"></a>
</td>
<?php } ?>
</tr>
</table>
</td>
<td width="9" align="right">
<img src="images/main_menu_right.gif" alt="Main Menu" width="9" height="41" />
</td>
</tr>
</table>
</td>
</tr>

<tr>
	<td>&nbsp;</td>
</tr>

<tr>
	<td>
	<table width="100%" height="300" border="0" cellpadding="0" cellspacing="0">
	
<tr>
	<td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FEEFDA">