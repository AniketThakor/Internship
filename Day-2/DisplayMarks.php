<?php
  $subject1 = 74;
  $subject2 = 76;
  $subject3 = 71;
  $subject4 = 81;
  $subject5 = 86;
  echo "Science&Technology : $subject1 <br> Mathematics : $subject2 <br> SocialScience : $subject3 <br> 
  English : $subject4 <br> Hindi : $subject5 <br>";
  $Total = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
  echo "Total Marks = <b> $Total </b><br />";
  $Percentage = ($Total * 100) / 500;
  echo "Percentage = <b> $Percentage </b><br />";
  if($Percentage > 75)
  { echo "Grage = Distinction";}
  elseif($Percentage > 60)
  { echo "Grage = First Class";}
  elseif($Percentage > 50)
  { echo "Grage = Second Class";}
  elseif($Percentage > 40)
  { echo "Grage = Third Class";}
  else
  { echo "Fail";}
?>