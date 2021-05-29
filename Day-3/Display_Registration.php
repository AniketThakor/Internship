<html>
<head>
<title>Student Registration Display Form</title>
</head>
<body>
<h3>STUDENT INFORMATION</h3>
Student Name : <?php echo $_POST["First_Name"] ." ".$_POST["Last_Name"]."<br/>";?>
D.O.B : <?php echo $_POST["Birthday"]."<br/>";?>
Email ID : <?php echo $_POST["Email"]."<br/>";?>
Gender : <?php echo $_POST["Gender"]."<br/>";?>
Address : <?php echo $_POST["Address"]."<br/>".$_POST["City"]."<br/>".$_POST["Pin_Code"]."<br/>";?>
 <?php echo $_POST["State"]."<br/>";?>
 <?php echo $_POST["Country"]."<br/>";?>
Hobbies : <?php echo $_POST["Hobby_Drawing"]." , ".$_POST["Hobby_Singing"]." , 
".$_POST["Hobby_Dancing"]." , ".$_POST["Other_Hobby"];?>
<table>
</body>
</html>
