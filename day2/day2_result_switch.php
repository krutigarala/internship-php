<?php
$no=1;
$rno1=1;
$rno2=2;
$name1='Amit';
$name2='Om';
$c1=40;
$c2=87;
$php1=35;
$php2=80;
$android1=23;
$android2=88;
$total1=$c1+$php1+$android1;
$total2=$c2+$php2+$android2;
$percentage1=$total1/300*100.0;
$percentage2=$total2/300*100.0;
switch($no){
    case 1;
        echo "Student1 Marks<br>";
        echo "Roll no $rno1 <br> Name $name1 <br> C $c1<br> PHP $php1 <br> "
                . "Android $android1 <br> Total $total1<br> Percentage $percentage1<br>";
        if ($percentage1>75){
            echo "Distiction";
        }
        elseif ($percentage1>60) {
            echo "Pass";
        } 
        else {
            echo "Fail";
        }
        break;
        
    case 2;
        Echo "Student2 Marks<br>";
        Echo "Roll no $rollno2 <br> Name $name2 <br> C $c2<br> PHP $php2 <br> "
                . " Android $android2 <br> Total $total2 <br> precentage $percentage2<br>";    
        if ($percentage2>75){
            echo "Distiction";
        }
        elseif ($percentage2>60) {
            echo "Pass";
        } 
        else {
            echo "Fail";
        }
        break;
}