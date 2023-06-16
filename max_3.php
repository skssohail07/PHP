<!DOCTYPE html>
<html>
<body>
<h1> Highest Number </h1>
<form method="post">
Enter the first number: <input type="text" name="first"><br><br>
Enter the second number: <input type="text" name="second"><br><br>
Enter the third number: <input type="text" name="third"><br><br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
$a=$_POST['first'];
$b=$_POST['second'];
$c=$_POST['third'];
if($a>$b && $a>$c){
echo $a." is the highest number";
}
elseif ($b>$a && $b>$c){
echo $b." is the highest number";
}
else{
echo $c." is the highest number";
}
}
?>
</body>
</html>
