<?php
//count()
$arr1 = array('c','c++','php','java','Android');
echo "Count elements in array are ".count($arr1);

//array_count_values()
$arr2 = array("C","php","c","android","php","java");
$newarr = array_count_values($arr2);
echo "<br/><br/>";
echo "Count values of array";
foreach($newarr as $key => $value) {
	echo "<br />$key - <strong>$value</strong>";
}
echo "<br/><br/>";

//array_sum()
$arr3 = array(1,2,3,4,5);
echo "Sum of elements in array ".array_sum($arr3);
echo "<br/><br/>";

//array_product()
$arr3 = array(1,2,3,4,5);
echo "Product of element in array ".array_product($arr3);
echo "<br/><br/>";

//array_reverse()
$arr1 = array('c','c++','php','java','Android');
$revarr = array_reverse($arr1);
echo "Reverse elements of array('c','c++','php','java','Android')  <br/>";
echo "<pre>";
print_r($revarr);
echo "<br/><br/>";

//in_array()
$arr1 = array('c','c++','php','java','Android');
$temp = in_array('php',$arr1); //if php exists returns 1 means true otherwise 0 means false.
echo $temp;
echo "<br/><br/>";

//array_rand()
//method 1
echo "method 1<br/>";
$arr1 = array('c','c++','php','java','Android');
$indexofarray = array_rand($arr1);//return random index of element
echo "Random element index no ".$indexofarray."<br/>";
echo "Random index element name ".$arr1[$indexofarray];
echo "<br/>";
//method 2
echo "method 2";
$arr1 = array('c','c++','php','java','Android');
$indexofarray = array_rand($arr1,2);//Returns Array Index
foreach($indexofarray as $key => $value)
{
	echo "<br/>$key - <strong>" .$arr1[$value]. "</strong>";
}
echo "<br/><br/>";

//array_unique()
$arr1 = array('c','c++','php','java','Android');
print_r(array_unique($arr1));
echo "<br/><br/>";

//array_merge()
$arr1 = array('c','c++','php','java','Android');
$arr3 = array(1,2,3,4,5);
$newarr=array_merge($arr1,$arr3);
print_r($newarr);
echo "<br/><br/>";

//array_search()
$arr1 = array('c','c++','php','java','Android');
$check = array_search('php',$arr1);
echo "Search php element on index no ".$check; //return index 
echo "<br/><br/>";

//range()
//example 1
echo "First example of range()";
$arr = range("11","20");
foreach($arr as $key=>$value) {
	echo "<br/> $key - $value";
}
echo "<br/>";
//example 2
echo "Second example of range()<br/>";
$a = range('a','z');
print_r($a);
echo "<br/>";
//example 3
echo "Third example of range()<br/>";
$year = range(1900,2030);
echo "<select>";
foreach($year as $value) {
	echo "<option>$value</option>";
}
echo "</select>";
echo "<br/><br/>";

//sort()
$arr4 = array(80,60,50,40,8,74);
sort($arr4);
echo "sort() array(80,60,50,40,8,74)<br/>";
print_r($arr4);
echo"<br/><br/>";

//rsort()
$arr4 = array(80,60,50,40,8,74);
rsort($arr4);
echo "rsort() array(80,60,50,40,8,74)<br/>";
print_r($arr4);
echo "<br/><br/>";

//asort()
$arr4 = array(80,60,50,40,8,74);
asort($arr4);
echo "asort() array(80,60,50,40,8,74)<br/>";
print_r($arr4);
echo "<br/><br/>";

//ksort() (Key Sort)
$arr5 = array(
		"Banana" => "Yellow",
		"Apple" => "Red",
		"Mango" => "Green");
ksort($arr5);
echo "Key sort";
foreach($arr5 as $key => $value){
	echo "<br/>$key - $value";
}
echo "<br/><br/>";

//krsort() (Key Reverse Sort)
$arr5 = array(
		"Banana" => "Yellow",
		"Apple" => "Red",
		"Mango" => "Green");
krsort($arr5);
echo "Key Reverse Sort";
foreach($arr5 as $key => $value){
	echo "<br/>$key - $value";
}
echo "<br/><br/>";

//shuffle()
$arr6 = array("Football","Baseball","Hockey","Tennis","Boxing");
shuffle($arr6); //shuffle the array
echo "shuffle elements";
foreach($arr6 as $key => $value){
	echo "<br/> $value";
}
echo "<br/><br/>";

//array_key_exists()
$arr7 = array("a" => "apple","b" => "banana");
echo "array_key_exists() ".array_key_exists('a',$arr7);
echo "<br/><br/>";

//array_change_key_case()
$arr5 = array(
		"Banana" => "Yellow",
		"Apple" => "Red",
		"Mango" => "Green");
$uppercase = array_change_key_case($arr5,CASE_UPPER);
echo "change key in upper case<br/>";
print_r($uppercase);
echo "<br/><br/>";

//array_combine()
$arr8 = array("Banana","Apple","Mango");
$arr9 = array("Yellow","Red","Green");
$newarr1 = array_combine($arr8,$arr9);
echo "Combine two array<br/>";
print_r($newarr1);
echo "<br/><br/>";

//end()
$arr1 = array('c','c++','php','java','Android');
echo "Use of end() ".end($arr1);
echo "<br/><br/>";

//compact()
$name = "Kriz";
$subject = "Android";
$arr10 = compact("name","subject");
echo "Use of compact()<br/>";
print_r($arr10);
echo "<br/><br/>";

//array_flip()
$arr11 = array("a" => "akash","b" =>"banana","c" => "computer");
$fliparr=array_flip($arr11);
echo "Use of array_flip()<br/>";
print_r($fliparr);


//array_diff()
$a = array("akash","c","c++","java","php","android");
$b = array("akash","c","java","php");
$diff = array_diff($a,$b);
echo "Use of array_diff()<br/>";
print_r($diff);
echo "<br/><br/>";

//array_intersect()
$arr12 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr13 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
echo "Use of array_intersect()<br/>";
print_r(array_intersect($arr12,$arr13));
echo "<br/><br/>";

//array_values()
$arr14 = array("i" => "c","want" => "c++","learn" => "php");
$myarr = array_values($arr14);
echo "Use of array_values()";
foreach($myarr as $key => $value) {
	echo "<br/>$key - $value";
}
echo "<br/><br/>";

//array_push()
$a1 = array("c","c++");
array_push($a1,"java","php");
echo "Use of array_push()<br/>";
print_r($a1);
echo "<br/><br/>";

//array_pop()
$a2 = array("c","c++","java","php","asp");
echo "Use of array_pop()<br/>";
array_pop($a2); //Remove
print_r($a2);
array_pop($a2); //Remove
print_r($a2);
echo "<br/><br/>";

//explode()
$mystring = "I Love PHP Language";
$mystr = explode(" ",$mystring);
echo "Use of explode()<br/>";
print_r($mystr);
echo "<br/><br/>";

//implode()
echo "Use of implode()<br/>";
$a3 = array("i","love","php","language");
$mystr2 = implode(" ",$a3);
echo $mystr2;
echo "<br/><br/>";



?>





