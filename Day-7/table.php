<?php
//DB connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_internship";
//Connection Function
$connection = mysqli_connect($host, $username, $password, $dbname);
$q = mysqli_query($connection,"select * from tbl_user")
        or die("Error". mysqli_error($connection));

//Query
echo "<table border='1'>";
echo "<tr>";
echo "<th>No.</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Action</th>";
echo "</tr>";
$i = 0;
while ($row = mysqli_fetch_array($q)) {
    $i++;
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td>{$row['user_mobile']}</td>";
    echo "<td><a href = 'delete.php?deleteid={$row['user_no']}'>Delete</a></td>";
    echo "</tr>";
    
    }
    
    echo "</table>";
    
  echo "<a href='insert-record.php'>Add Record</a>"; 