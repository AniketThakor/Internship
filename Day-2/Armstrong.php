<?php
  $number = 156 ;
  $temp = $number; 
  $sum = 0;
 
  while( $number != 0 ){
   $rem = $number % 10; //find reminder
   $sum = $sum + ( $rem * $rem * $rem ); 

   $number = FLOOR($number / 10); 
   }

 if( $temp == $sum ){
   echo "The Entered Number is an Armstrong Number";
   }
   else{
    echo "The Entered Number is not an Armstrong Number";
    }
?>
