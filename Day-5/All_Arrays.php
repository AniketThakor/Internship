<?php
echo "<b>----------------------array_count_values----------------------</b>";
$a = array (
    "C","php","java","C","Python","C","java"
);
$b = array_count_values($a);
foreach ($b as $key => $value){
    echo "<br/>$key - <strong>$value</strong>";
}

echo "<br/><b>----------------------Array Sum----------------------</b><br/>";
$a = array(34,54,45,12,25,7);
echo array_sum($a);

echo "<br/><b>----------------------Reverse Array----------------------</b><br/>";
$a = array(34,54,45,12,25,7);
$b = array_reverse($a);
print_r($b);

echo "<br/><b>----------------------Check if the vaule exists or not----------------------</b><br/>";
$a = array(34,54,45,12,25,7);
$b = in_array('7',$a);
echo $b;

echo "<br/><b>----------------------Select one key----------------------</b><br/>";
$a = array(34,54,45,12,25,7);
$b = array_rand($a);
echo $a[$b];

echo "<br/><b>----------------------Select more than one key----------------------</b><br/>";
$a = array(34,54,45,12,25,7);
$b = array_rand($a,2);

foreach ($b as $key => $value)
{
    echo "<br/>$key - <strong>". $a[$value] . "</strong>";
}

echo "<br/><b>----------------------Will remove all duplicate values----------------------</b><br/>";
$a = array(34,54,45,12,25,7,34,54,45);
print_r(array_unique($a));

echo "<br/><b>----------------------Merge multiple array----------------------</b><br/>";
$a = array(34,54,45,12,25,7);
$b = array ("C","php","java","C","Python","C","java");
$c = array_merge($a,$b);
print_r($c);

echo "<br/><b>Search</b><br/>";
$a = array(34,54,45,12,25,7);
$b = array_search('7',$a);
echo $b;

echo "<br/><b>----------------------Create a new arraw using a specified range----------------------</b><br/>";
$a = range("1","7");
foreach($a as $key => $value){
    echo "<br/> $key - $value";
}

echo "<br/><b>----------------------Sorting----------------------</b><br/>";
$a = array(34,54,45,12,25,7);
sort($a);
print_r($a);

echo "<br/><b>----------------------Reverse or descending Sorting----------------------</b><br/>";
$a = array(34,54,45,12,25,7);
rsort($a);
print_r($a);

echo "<br/><b>----------------------Ascending Sorting----------------------</b><br/>";
$a = array(34,54,45,12,25,7);
asort($a);
print_r($a);

echo "<br/><b>----------------------Sort an array in ascending order using a key----------------------</b><br/>";
$a = array(
     "Bat" => "Cricket",
     "Racket" => "Badminton",
     "chess" => "Indoor Game"
);
ksort($a);
foreach ($a as $key => $value){
    echo "<br/> $key - <b>$value</b>";
}

echo "<br/><b>----------------------Key Reverse Sort----------------------</b><br/>";
$a = array(
     "Bat" => "Cricket",
     "Racket" => "Badminton",
     "chess" => "Indoor Game"
);
krsort($a);
foreach ($a as $key => $value){
    echo "<br/> $key - <b>$value</b>";
}

echo "<br/><b>----------------------Shuffle----------------------</b><br/>";
$a = array("Aniket","Sahil","Balbhadra","Keyur","Amitji","Ajay");
shuffle($a);
foreach ($a as $key => $value){
    echo "<b><br/> $value</b>";
}

echo "<br/><b>----------------------Array key exists or not----------------------</b><br/>";
$a = array("A" => "Aniket", "S" => "Sahil","B" => "Balbhadra","K" => "Keyur");
echo array_key_exists('S',$a);

echo "<br/><b>----------------------Key Case----------------------</b><br/>";
$a = array(
     "Bat" => "Cricket",
     "Racket" => "Badminton",
     "chess" => "Indoor Game"
);
$b = array_change_key_case($a,CASE_UPPER);
print_r($b);

echo "<br/><b>----------------------Return the last value of the last element----------------------</b><br/>";
$a = array("Aniket","Sahil","Balbhadra","Keyur","Amitji","Ajay");
echo end($a);

echo "<br/><b>----------------------Create an array form the variables and their values----------------------</b><br/>";
$Firstname = "Aniket";
$Lastname = "Thakor";
$a = compact("Firstname","Lastname");
print_r($a);

echo "<br/><b>----------------------Flip----------------------</b><br/>";
$a = array ("A" => "Aniket","S" => "Sahil", "K" => "Keyur", "B" => "Balbhadra");
$b = array_flip($a);
print_r($b);

echo "<br/><b>----------------------Shuffle----------------------</b><br/>";
$a = array("Aniket","Sahil","Balbhadra","Keyur","Amitji","Ajay");
shuffle($a); 
foreach ($a as $key => $value) {
echo "<br /> $value ";
}

echo "<br/><b>----------------------Diffrences----------------------</b><br/>";
$a=array("Aniket","Sahil","Balbhadra","Keyur","Amitji","Ajay","C","java","php");
$b=array("Aniket","Sahil","java","php");
$c = array_diff($a, $b);
print_r($c);

echo "<br/><b>----------------------Intersect----------------------</b><br/>";
$a = array(0=>"Aniket",1=>"Sahil",2=>"Balbhadra",3=>"Amitji",4=>"Keyur");
$b = array(5=>"Sahil",6=>"Aniket",7=>"Friends");
print_r(array_intersect($a,$b));

echo "<br/><b>----------------------Array Values----------------------</b><br/>";
$a = array("i"=>"c","want"=>"c++","learn"=>"php");
$b = array_values($a);
foreach($b as $key => $value) {
echo " <br />$key - <b>$value</b>";
}

echo "<br/><b>----------------------Array Push----------------------</b><br/>";
$a=array("Aniket","Sahil");
array_push($a,"Both","are","Brothers");
print_r($a);

echo "<br/><b>----------------------Array Pop----------------------</b><br/>";
$a = array("Aniket","Sahil","Both","are","Brothers","Enemy");
array_pop($a); 
print_r($a);
array_pop($a); 
print_r($a);

echo "<br/><b>----------------------Explode Array----------------------</b><br/>";
$a = "Aniket Love PHP Language";
$b = explode(" ",$a);
print_r($b);

echo "<br/><b>----------------------Implode Array----------------------</b><br/>";
$a = array("Aniket","love","PHP","language");
$b = implode(" ", $a);
echo $b;


?>