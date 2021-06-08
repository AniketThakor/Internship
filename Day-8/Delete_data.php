<?php
 $connection = mysqli_connect("localhost","root","","db_internship");
 

 if(isset($_GET['deleteid']))
{
 mysqli_query($connection, "delete from tbl_student where st_no='{$_GET['deleteid']}'") or die(mysqli_error($connection));
 
}

echo "<a href='Display_table.php'>Show Updated</a>";
