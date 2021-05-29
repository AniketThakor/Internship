<?php
echo "<table border='1' >";
for($i=0;$i<500;$i++){
    echo "<tr>";
    if($i%2==0){
        echo "<td bgcolor='lightblue'>$i</td>";
     }else {
        echo "<td bgcolor='lightgrey'>$i</td>";
     }
    echo "</tr>";
    
}
echo "</table>";