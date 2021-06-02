<form method="post">
Programming :
C<input type="checkbox" name="cbox[]" value="c">
C++<input type="checkbox" name="cbox[]" value="c++">
PHP<input type="checkbox" name="cbox[]" value="php">
<input type="submit">
</form>
<?php
if($_POST)
{
$programming= $_POST['cbox'];
$string = implode(",", $programming);
echo $string;
}
?>