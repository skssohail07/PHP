<!DOCTYPE html>
<html>
<body>
<h1> Even and Odd Numbers </h1>
<form method="post">
Enter a number: <input name="number" type="text"><br><br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
$x=$_POST["number"];
if($x%2==0){
echo "Number ".$x." is even";
}
else{
echo "Number ".$x." is odd";
}
}
?>
</body>
</html>
