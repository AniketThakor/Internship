<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_internship";
//Connection Function
$connection = mysqli_connect($host, $username, $password, $dbname);
$q = mysqli_query($connection,"select * from tbl_user")
        or die("Error". mysqli_error($connection));
if ($q)
{
    echo "<script>alert('Record Added');</script>";
}

// Below function will fetch data as Numerical Array
$row = mysqli_fetch_row($q);
//Debug
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];
// Numerical and Associative array
$row = mysqli_fetch_array($q);
echo "<prev>";
print_r($row); 
echo $row[0].$row[1].$row[2].$row[3];
echo $row['user_no'].$row['user_name'].$row['user_gender'].$row['user_mobile'];



