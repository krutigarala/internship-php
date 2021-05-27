<?php
echo "<table border='2'>";
for($i=0;$i<=1000;$i++)
{
    echo "<tr>";
    if($i%2==0) {
    echo "<td bgcolor='magenta'>$i</td>";
    }
    else {
        echo "<td bgcolor='sky_blue'>$i</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>