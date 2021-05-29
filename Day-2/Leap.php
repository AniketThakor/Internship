<?php  
$n = 2038;  
 
if((0 == $n % 4) & (0 != $n % 100) | (0 == $n % 400))
{
echo "$n is a Leap Year.";    
}
 
else  
{  
echo "$n is not a Leap Year.";    
}
?> 