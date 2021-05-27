<?php
$name=$_POST['nm'];
$c=$_POST['cmarks'];
$php=$_POST['phpmarks'];
$android=$_POST['androidmarks'];
$python=$_POST['pythonmarks'];
$java=$_POST['javamarks'];

$tot=$c+$php+$android+$python+$java;
$per=$tot/500*100.0;

echo "<table align='center' border='2'>";
echo "<tr><th>Name</th><th>C Marks</th><th>PHP Marks</th><th>Android Marks</th>"
."<th>Python Marks</th><th>Java Marks</th><th>Total Marks</th><th>Percentage</th><th>Result</th</tr>";
echo "<tr>";
if($per>=80) {
    echo"<td bgcolor='lightgreen'>".$name."</td>";
    echo "<td bgcolor='lightgreen'>".$c."</td>";
    echo "<td bgcolor='lightgreen'>".$php."</td>";
    echo "<td bgcolor='lightgreen'>".$android."</td>"; 
    echo "<td bgcolor='lightgreen'>".$python."</td>";
    echo "<td bgcolor='lightgreen'>".$java."</td>";
    echo "<td bgcolor='lightgreen'>".$tot."</td>";
    echo "<td bgcolor='lightgreen'>".$per."</td>";    
    echo "<td bgcolor='lightgreen'>Distiction</td>";
}
elseif($per>=70) {
    echo"<td bgcolor='yellow'>".$name."</td>";
    echo "<td bgcolor='yellow'>".$c."</td>";
    echo "<td bgcolor='yellow'>".$php."</td>";
    echo "<td bgcolor='yellow'>".$android."</td>"; 
    echo "<td bgcolor='yellow'>".$python."</td>";
    echo "<td bgcolor='yellow'>".$java."</td>";
    echo "<td bgcolor='yellow'>".$tot."</td>";
    echo "<td bgcolor='yellow'>".$per."</td>";
    echo "<td bgcolor='yellow'>Second class</td>";
}
elseif ($per>=50) {
    echo"<td bgcolor='lightgrey'>".$name."</td>";
    echo "<td bgcolor='lightgrey'>".$c."</td>";
    echo "<td bgcolor='lightgrey'>".$php."</td>";
    echo "<td bgcolor='lightgrey'>".$android."</td>"; 
    echo "<td bgcolor='lightgrey'>".$python."</td>";
    echo "<td bgcolor='lightgrey'>".$java."</td>";
    echo "<td bgcolor='lightgrey'>".$tot."</td>";
    echo "<td bgcolor='lightgrey'>".$per."</td>";
    echo "<td bgcolor='lightgrey'>Pass</td>";
}
 else {
    echo"<td bgcolor='red'>".$name."</td>";
    echo "<td bgcolor='red'>".$c."</td>";
    echo "<td bgcolor='red'>".$php."</td>";
    echo "<td bgcolor='red'>".$android."</td>"; 
    echo "<td bgcolor='red'>".$python."</td>";
    echo "<td bgcolor='red'>".$java."</td>";
    echo "<td bgcolor='red'>".$tot."</td>";
    echo "<td bgcolor='red'>".$per."</td>";
    echo "<td bgcolor='red'>Fail</td>";
}
echo "</tr>";
?>