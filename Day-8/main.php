<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);
        if($_POST){
            $name = $_POST['txt1'];
            $gender = $_POST['txt2'];
            $mobile = $_POST['txt3'];
            $q = mysqli_query($connection,"insert into tbl_user(user_name,user_gender,user_mobile) values('{$name}','{$gender}','{$mobile}')")
            or die("Error". mysqli_error($connection));
      
            
            }

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>	Day-8 </title>
	<style type="text/css">
		table{
	border-collapse: collapse;
	 width: 50%;
	 margin-left: auto; 
  margin-right: auto;
}
th, td {
  padding: 8px;
  text-align: left;
  font-family:verdana;
}
	</style>
</head>
<body>
<h2 style="text-align:center;font-family:verdana;">Registration Form</h2>
	<form method="post">
		<table align="center">
			<tr>
				<td> Name :</td>
				<td><input type="text" name="txt1" /> <br/> <br/></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="email" name="txt2" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Mobile : </td>
				<td><input type="Number" name="txt3" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td><input type="password" name="txt4" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Date of Birth : </td>
                                
                                <td><input type="date" name="txt5" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Gender : </td>
				<td><select name="txt6">
					<option value="Male">Male</option>
					<option value="Female">Female</option></select></td>
			</tr>
			
			<tr>
				<td>Address : </td>
				<td><textarea name="txt8" cols="50" rows="5"></textarea><br/> <br/></td>
			</tr>
			<tr>
				<td>Area : </td>
				<td><input type="text" name="txt9" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Pincode : </td>
				<td><input type="Number" name="txt10"><br/> <br/></td>
			</tr>
			<tr>
				<td>Blood Group : </td>
				<td><input type="text" name="txt7" /><br/> <br/></td>
			</tr>
			<tr>
				<td><input type="submit" /></td>
				<td><input type="reset" /></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php

if ($_POST) {
	$name  = $_POST['txt1'];
	$email = $_POST['txt2'];
	$mobile = $_POST['txt3'];
	$pass = $_POST['txt4'];
	$dob = $_POST['txt5'];
	$gender = $_POST['txt6'];
	$bg = $_POST['txt7'];
	$address = $_POST['txt8'];
	$area = $_POST['txt9'];
	$pincode = $_POST['txt10'];

	$q = mysqli_query($connection,
		"insert into tbl_student(st_name,st_email,st_mobile,st_pass,st_dob,st_gender,st_bg,st_address,st_area,st_pincode) 
		values('{$name}','{$email}','{$mobile}','{$pass}','{$dob}','{$gender}','{$bg}','{$address}','{$area}','{$pincode}')") 
		or die("Error". mysqli_error($connection));

	if($q){
		echo"<script>alert('Record Added');</script>";
	}
}
?>