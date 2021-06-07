<?php 
//db connect
include './connection.php';

$eid = $_GET['editid'];
//select data from table
$editq = mysqli_query($con,"select * from tbl_student where st_id='{$eid}'") or die(mysqli_error($con));
$editdata = mysqli_fetch_array($editq);
//print_r($editdata);

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
    $updateq=mysqli_query($con,"update tbl_student set st_name='{$name}',st_gender='{$gen}',st_dob='{$dob}',st_bloodgroup='{$bldgrp}',st_mobile='{$mobile}',st_email='{$email}',st_address='{$add}',st_area='{$area}',st_pincode='{$pin}',st_password='{$pass}' where st_id='{$eid}'") or die(mysqli_error($con));
    if($editq) {
		echo "<script>alert('Record Updated');
			  window.location='day7_table.php';</script>";
	}
}
?>



<html> 
    <body>
    <form method="post">
    <table border="1" cellpadding="5">
    <tr><td>Name : </td>
        <td><input type="text" value="<?php echo $editdata['st_name'];?>" name="txtnm"/></td></tr>
    <tr><td>Gender : </td>
        <td>Male<input type="radio" <?php if($editdata['st_gender']=="Male") { echo "checked";}?> value="Male" name="txtgen">
	   Female<input type="radio" <?php if($editdata['st_gender']=="Female") { echo "checked";}?> value="Female" name="txtgen">
	  	</td></tr>
    <tr><td>Date of Birth :
        <td> <input type="date" value="<?php echo $editdata['st_dob'];?>" name="txtdob"/></td></tr>
    <tr><td>Blood Group : </td>
        <td><select name="txtbldgrp" value="<?php echo $editdata['st_bloodgroup'];?>">
            <option value="<?php echo $editdata['st_bloodgroup'];?>">Select Your Blood Group</option>
            <option <?php if($editdata['st_bloodgroup']=="A+") {echo "selected";};?> value="A+">A+</option>
            <option <?php if($editdata['st_bloodgroup']=="B+") {echo "selected";};?> value="B+">B+</option>
	    <option <?php if($editdata['st_bloodgroup']=="AB+") {echo "selected";};?> value="AB+">AB+</option>
	    <option <?php if($editdata['st_bloodgroup']=="O+") {echo "selected";};?> value="O+">O+</option>
	    <option <?php if($editdata['st_bloodgroup']=="A-") {echo "selected";};?> value="A-">A-</option>
	    <option <?php if($editdata['st_bloodgroup']=="B-") {echo "selected";};?> value="B-">B-</option>
	    <option <?php if($editdata['st_bloodgroup']=="AB-") {echo "selected";};?> value="AB-">AB-</option>
	    <option <?php if($editdata['st_bloodgroup']=="O-") {echo "selected";};?> value="O-">O-</option>
	    </select></td></tr>
    <tr><td>Mobile No : </td>
        <td><input type="tel" name="txtmob" value="<?php echo $editdata['st_mobile'];?>" pattern="^[6789]\d{9}$"/></td></tr>
    <tr><td>Email : </td>
        <td><input type="email" name="txtemail" value="<?php echo $editdata['st_email'];?>"/></td></tr>
    <tr><td>Address : </td>
        <td><input type="text" name="txtadd" rows="5" cols="22" value="<?php echo $editdata['st_address'];?>"/></td></tr>
    <tr><td>Area : </td>
        <td><input type="text" name="txtarea" value="<?php echo $editdata['st_area'];?>"/></td></tr>
    <tr><td>Pincode : </td>
        <td><input type="text" name="txtpin" value="<?php echo $editdata['st_pincode'];?>"/></td></tr>
    <tr><td>Password : </td>
        <td><input type="password" name="txtpass" value="<?php echo $editdata['st_password'];?>"/></td></tr>
    <tr><td colspan="2" align="center"><input type="submit"/></td></tr>
    </table>
    </form>
    </body>
</html>







