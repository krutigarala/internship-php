<?php 
include './connection.php';

if($_POST) {
	$name = $_POST['txtnm'];
	$gen = $_POST['txtgen'];
	$dob = $_POST['txtdob'];
	$bldgrp = $_POST['txtbldgrp'];
        $mobile = $_POST['txtmob'];
        $email = $_POST['txtemail'];
        $add = $_POST['txtadd'];
        $area = $_POST['txtarea'];
        $pin = $_POST['txtpin'];
        $pass = $_POST['txtpass'];
	$i=mysqli_query($con,"insert into tbl_student(st_name,st_gender,st_dob,st_bloodgroup,st_mobile,st_email,st_address,st_area,st_pincode,st_password) values('{$name}','{$gen}','{$dob}','{$bldgrp}','{$mobile}','{$email}','{$add}','{$area}','{$pin}','{$pass}')")
		or die("Error:".mysqli_error($con));
		
	if($i) {
		echo "<script>alert('Record Added');</script>";
	}
}

?>



<html> 
    <body>
    <form method="post">
    <table border="1" cellpadding="5">
    <tr><td>Name : </td>
        <td><input type="text" name="txtnm" required/></td></tr>
    <tr><td>Gender : </td>
        <td> <select name="txtgen" required>
	  <option>Male</option>
	  <option>Female</option>
	  </select></td></tr>
    <tr><td>Date of Birth :
        <td> <input type="date" name="txtdob" required></td></tr>
    <tr><td>Blood Group : </td>
        <td><select name="txtbldgrp" required>
          <option>Select Your Blood Group</option>
          <option value="A+">A+</option>
	  <option value="B+">B+</option>
	  <option value="AB+">AB+</option>
	  <option value="O+">O+</option>
	  <option value="A-">A-</option>
	  <option value="B-">B-</option>
	  <option value="AB-">AB-</option>
	  <option value="O-">O-</option>
	  </select></td></tr>
    <tr><td>Mobile No : </td>
        <td><input type="tel" name="txtmob" pattern="^[6789]\d{9}$" required/></td></tr>
    <tr><td>Email : </td>
        <td><input type="email" name="txtemail" required/></td></tr>
    <tr><td>Address : </td>
        <td><textarea name="txtadd" rows="5" cols="22" required/></textarea> </td></tr>
    <tr><td>Area : </td>
        <td><input type="text" name="txtarea" required/></td></tr>
    <tr><td>Pincode : </td>
        <td><input type="text" name="txtpin" required/></td></tr>
    <tr><td>Password : </td>
        <td><input type="password" name="txtpass" required/></td></tr>
    <tr><td colspan="2" align="center"><input type="submit"/></td></tr>
    </table>
    </form>
    </body>
</html>

<a href="day7_table.php">Display Record</a>
