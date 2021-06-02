<?php
// Associative Array 
// Key = Value
// Method 1
$a[0] = 7;
$a[1] = 25;
$a['C'] = "Computer Language";
$a["php"] = "Programmer";
$a[10] = "Ten";
$a[50] = 25.25;

 // Method 2
 // Always use this method to create an array
 $a = array(
    0 => 7,
    1 => 25,
    "C" => "Computer",
    "php" => "Programmer",
    10 => "Ten",
    50 => 25.25

 );
 
//Print Value
 echo "C for ".$a['C'];
 
 foreach ($a as $value) {
     echo "<br/> Value if $value";
 }
 foreach ($a as $key  => $value) {
     echo "<br/> Key is  <b>$key</b> and Value is  <b>$value</b>";
    }

// 3 Inbuiilt Functions To Debug an Array 
echo "<prev>";
print_r($a);
echo "<prev>";
echo "<prev>";
var_dump($a);
echo "<prev>";

?>