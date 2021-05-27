<html>
<form action="day3_display_reg.php" method="post" name="registration">
    <table align="center" border="1" cellpadding="10" cellspacing="10" width="460" height="300">
<tr>
    <td align="center" colspan="2">
    <h1 style="font-size:50px;">Login Form</h1>
</td>
</tr>
<tr>
    <td>Full name:</td>
    <td>
        <input type="text" name="fnm" required>
    </td>
</tr>
<tr>
    <td>Birth Date:</td>
    <td>
        <input type="date" name="bdate" required>
    </td>
</tr>
<tr>
    <td>Age:</td>
    <td>
        <input type="number" name="age" required>
    </td>
</tr>
<tr>
    <td>Gender:</td>
    <td>
        <input type="radio" name="gender" value="female" required>Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
    </td>
</tr>
<tr>
    <td>Address:</td>
    <td>
        <textarea id="id" name="address" rows="5" cols="40" required></textarea>
    </td>
</tr> 
<tr>
    <td>City:</td>
    <td>
        <input type="text" name="city" required>
    </td>
</tr> 
<tr>
    <td>State:</td>
    <td>
        <input type="text" name="state" required>
    </td>
</tr>
<tr>
    <td>Country:</td>
    <td>
        <input type="text" name="country" required>
    </td>
</tr> 
<tr>
    <td>Phone no.:</td>
    <td>
        <input type="tel" pattern="^[6789]\d{9}$" name="phno" required>
    </td>
</tr> 
<tr>
    <td>Email:</td>
    <td>
        <input type="email" name="email" required>
    </td>
</tr>
<tr>
    <td>Password</td>
    <td><input type="password" name="pass" required></td>
</tr>
<tr>
    <td colspan="2" align="center">
    <input type="submit" value="Submit" name="Submit" onClick"validateForm()"/>
    </td>
</tr>
</table>
</form>
</html>