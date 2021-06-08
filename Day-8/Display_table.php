<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);
        $q = mysqli_query($connection,"select * from tbl_student")
        or die("Error". mysqli_error($connection));
        
//Query
echo "<table border='1'>";
echo "<tr>";
echo "<th>No.</th>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "<th>Mobile</th>";
echo "<th>Password</th>";
echo "<th>DOB</th>";
echo "<th>Gender</th>";
echo "<th>Address</th>";
echo "<th>Area</th>";
echo "<th>Pincode</th>";
echo "<th>Blood Group</th>";
echo "<th>Action</th>";
echo "</tr>";
$i = 0;
while ($row = mysqli_fetch_array($q)) {
    $i++;
    echo "<tr>";
    echo "<td>$i</td>";
    
    echo "<td>{$row['st_name']}</td>";
    echo "<td>{$row['st_email']}</td>";
    echo "<td>{$row['st_mobile']}</td>";
    echo "<td>{$row['st_pass']}</td>";
    echo "<td>{$row['st_dob']}</td>";
    echo "<td>{$row['st_gender']}</td>";
    echo "<td>{$row['st_bg']}</td>";
    echo "<td>{$row['st_address']}</td>";
    echo "<td>{$row['st_area']}</td>";
    echo "<td>{$row['st_pincode']}</td>";
    
    
    echo "<td><a href = 'delete.php?deleteid={$row['st_no']}'>Delete</a></td>";
    echo "</tr>";
    
    }
    
    echo "</table>";
    
  echo "<a href='main.php'>Add Record</a>"; 