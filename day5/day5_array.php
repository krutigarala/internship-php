<?php
//numerical array
//method 1
$a[0]=60;
$a[1]='PHP';
$a[2]="Array";
$a[3]=9;	
$a[4]=26.6;

//method 2 //Dynamic Array
$a[]=60;
$a[]='PHP';
$a[]="Array";
$a[]=9;	
$a[]=26.6;

//method 3 //for always use take this one
$a = array(60,'PHP',"Array",9,26.6);

//single value print
echo $a[1];

//whole array print
for($i=0;$i<count($a);$i++) {
	echo "<br/>".$a[$i];
}

// 3 inbuilt function for debug array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";



//associative array
//key=value
//method 1
$a[0]=60;
$a['L']='Language';
$a["P"]="PHP Developer";
$a[9]='Nine';	
$a[2]=26.6;

//method 2 //for always use take this one
$a = array(
	0 => 60,
	'L' => 'Language',
	"P" => "PHP Developer",
	9 => 'Nine',
	2 => 26.6
	);

echo "L for ".$a['L'];

foreach($a as $value) {
	echo "<br/>Value is $value";
}

foreach($a as $key=>$value) {
	echo "<br/>Key is <b>$key</b> and Value is <b>$value</b>";
}

// 3 inbuilt function for debug array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";

?>