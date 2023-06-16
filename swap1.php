<!DOCTYPE html>
<html>
<body>
<h1> Swap two numbers </h1>
<form method="post">
Enter the first number: <input type="text" name="first"><br><br>
Enter the second number: <input type="text" name="second"><br><br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
$a=$_REQUEST['first'];
$b=$_REQUEST['second'];
echo "Numbers before swapping:"."\n"."a = ".$a."\tb = ".$b."<br>";
$temp=$a;
$a=$b;
$b=$temp;
echo "Numbers after swapping:"."\n"."a = ".$a."\tb = ".$b;
}
?>
</body>
</html>
