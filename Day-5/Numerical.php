<?php
// Numerical Array 
//Method 1
$a[0] = 10;
$a[1] = 20;
$a[2] = 25.50;
$a[3] = "4";
$a[4] = "C";

//Method 2
// Index Dynamic Array
$a[] = 10;
$a[] = 20;
$a[] = 25.50;
$a[] = "4";
$a[] = "C";

//Method 3
/* Always use this methd to create an array
*/
$a = array(10,20,20.50,"C","Java","php");
// Print array value
echo $a[3];
 
// Print Whole Array
for($i=0;$i<=5;$i++) {
    echo "<br/>".$a[$i];
}
// In built Count Function
for($i=0;$i<count($a);$i++) {
     echo "<br/>" .$a[$i];
}
// 3 Inbuilt Functions to Debugg an Array
echo "<prev>";
print_r($a);
echo "<prev>";
echo "<prev>";
var_dump($a);
echo "<prev>";
?>
