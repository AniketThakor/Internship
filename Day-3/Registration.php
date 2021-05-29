<html>
<head>
<title>Demo Registration Form</title>
<style type="text/css">
h3{font-family: Calibri; font-size: 22pt; font-style: normal; font-weight: bold; color:SlateBlue;
text-align: center; text-decoration: underline }
table{font-family: Calibri; color:white; font-size: 11pt; font-style: normal;
text-align:; background-color: SlateBlue; border-collapse: collapse; border: 2px solid navy}
table.inner{border: 0px}
</style>
</head>
<body>
<h3>STUDENT REGISTRATION FORM</h3>
<form action="Display.php" method="POST">
<table align="center" cellpadding = "10">
<!-- First Name -->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First_Name" maxlength="30" required/>
(max 30 characters a-z and A-Z)
</td>
</tr>
<!-- Last Name -->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" maxlength="30" required/>
(max 30 characters a-z and A-Z)
</td>
</tr>
<!-- Date Of Birth -->
<tr>
<td>DATE OF BIRTH</td>
<td><input type="date" name="Birthday" required/></td>
</tr>
<!-- Email Id -->
<tr>
<td>EMAIL ID</td>
<td><input type="email" name="Email" maxlength="100" style="width:250px" required 
 placeholder="Enter a valid email address">
 </td>
</tr><!-- Mobile Number -->
<tr>
<td>MOBILE NUMBER</td>
<td><input type="text" name="Mobile_Number" maxlength="10" />
 (10 digit number)
</td>
</tr>
<!-- Gender -->
<tr>
<td>GENDER</td>
<td><input type="radio" name="Gender" value="Male" checked/>Male 
 <input type="radio" name="Gender" value="Female" />Female 
</td>
</tr>
<!-- Address -->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>
<!-- City -->
<tr>
<td>CITY</td>
<td><select name="City" id="City">
 <option value="0" selected>-- Select --</option>
 <option value="Ahmedabad">Ahmedabad</option>
 <option value="Mehsana">Mehsana</option>
 <option value="Patan">Patan</option>
 <option value="Gandhinagar">Gandhinagar</option>
 <option value="Visnagar">Visnagar</option>
 </select>
</td>
</tr>
<!-- Pin Code -->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="Pin_Code" maxlength="6" />
(6 digit number)
</td>
</tr>
<!-- State -->
<tr>
<td>STATE</td>
<td><input type="text" name="State" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr><!-- Country -->
<tr>
<td>COUNTRY</td>
<td><input type="text" name="Country" value="India" readonly="readonly" /></td>
</tr>
<!-- Hobbies -->
<tr>
<td>HOBBIES <br /><br /><br /></td>
<td>
Drawing
<input type="checkbox" name="Hobby_Drawing" value="Drawing" />
Singing
<input type="checkbox" name="Hobby_Singing" value="Singing" />
Dancing
<input type="checkbox" name="Hobby_Dancing" value="Dancing" />
Sketching
<input type="checkbox" name="Hobby_Cooking" value="Cooking" /><br />
Others
<input type="checkbox" name="Hobby_Other" value="Other">
<input type="text" name="Other_Hobby" maxlength="30" />
</td>
</tr>

<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table> 
</form> 
</body>
</html>