<?php
include 'header_admin.php';
?>
<tr>
<td height="355" align="center" valign="top"><div class="content" style="height:550"><b><u><h1 style="font-size:20px;">Admin Panel</u></b></h1><p>
<html>
<head>
<title></title>
</head>
<body>
<form>
  <table border="1" align="center" height="150" width="80%" cellpadding="2" cellspacing="2">
  <th height="50px"><h3>Sr. No.</h3></th>
<th height="50px"><h3>Description</h3></th>
<th colspan="2" height="50px"><h3>Operation</h3></th>
<tr align="center" height="50px"> 
	<td align="center"><h3>1</h3></td>
      <td align="center"><h3>Registration</h3></td>
      <td align="center"><h2>-</h2></td>
      <td align="center"><a href="viewreg.php"><h3>View</h3></a>
      </td>
    </tr>
    <tr> 
	<td align="center"><h3>2</h3></td>
      <td align="center"><h3>Donner</h3></td>
      <td align="center"> <a href="donner.php">
        <h3>Insert</h3>
        </a> </td>
      <td align="center"> <a href="viewdonner.php">
        <h3>View</h3>
        </a> </td>
    </tr>
    <tr> 
	<td align="center"><h3>3</h3></td>
      <td align="center"><h3>Camp</h3></td>
      <td align="center"> <a href="camp.php">
        <h3>Insert</h3>
        </a> </td>
      <td align="center"> <a href="viewcamp.php">
        <h3>View</h3>
        </a> </td>
    </tr>
	 <tr> 
	 <td align="center"><h3>4</h3></td>
      <td align="center"><h3>Camp Registration</h3></td>
      <td align="center"><h2>-</h2></td>
      <td align="center"><a href="viewc_reg.php"><h3>View</h3></a>
      </td>
    </tr>
    <tr> 
	<td align="center"><h3>5</h3></td>
      <td align="center"><h3>Charity</h3></td>
      <td align="center"> <a href="charity.php">
        <h3>Insert</h3>
        </a> </td>
      <td align="center"> <a href="viewcharity.php">
        <h3>View</h3>
        </a> </td>
    </tr>
    <tr> 
	<td align="center"><h3>6</h3></td>
      <td align="center"><h3>Request</h3></td>
      <td align="center"><h2>-</h2></td>
      <td align="center"> <a href="viewrequest.php">
        <h3>View</h3>
        </a> </td>
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