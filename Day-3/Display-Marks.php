<html>
<head>
<title>Student Registration Display Form</title>
</head>
<body>
<h3>STUDENT MARKS CALCULATION</h3>
Student Name : <?php echo $_POST["First_Name"] ." ".$_POST["Last_Name"]."<br/>";?>
Science and Technology : <?php echo $_POST["number1"]."<br/>";?>
Mathematics: <?php echo $_POST["number2"]."<br/>";?>
Social Science: <?php echo $_POST["number3"]."<br/>";?>
English: <?php echo $_POST["number4"]."<br/>";?>
Hindi: <?php echo $_POST["number5"]."<br/>";?>
Gujarati: <?php echo $_POST["number6"]."<br/>";?>
Sanskrit: <?php echo $_POST["number7"]."<br/>";?>
Computer: <?php echo $_POST["number8"]."<br/>";?>
<?php

$Total = $_POST["number1"]+ $_POST["number2"] +$_POST["number3"] + $_POST["number4"] + 
$_POST["number5"] + $_POST["number6"] + $_POST["number7"] + $_POST["number8"];
echo "Total Marks = <b> $Total </b><br />";
$Percentage = ($Total * 100) / 800;
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
<table>
</body>
</html>
