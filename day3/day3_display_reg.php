<?php
$fullnm = $_POST['fnm'];
$bdate = $_POST['bdate'];
$age = $_POST['age'];
$gen = $_POST['gender'];
$add = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$mobno = $_POST['phno'];
$email = $_POST['email'];
$pass = $_POST['pass'];

echo "<table align='center' border='2' width='400' height='500' cellspacing='10'>";
echo "<tr><th><h1>Details</h1></th></tr>";
echo "<tr><td>".$fullnm."</td></tr>";
echo "<tr><td>".$bdate."</td></tr>";
echo "<tr><td>".$age."</td></tr>";
echo "<tr><td>";
if($gen=='male') {
    echo "Male";
}
elseif($gen=='female') {
    echo "Female";
}
 else {
    echo "Other";
}
echo "</td></tr>";
echo "<tr><td>".$add."</td></tr>";
echo "<tr><td>".$city."</td></tr>";
echo "<tr><td>".$state."</td></tr>";
echo "<tr><td>".$country."</td></tr>";
echo "<tr><td>".$mobno."</td></tr>";
echo "<tr><td>".$email."</td></tr>";
echo "<tr><td>".$pass."</td></tr>";
echo "</tr>";
echo "</table>";
?>