
<!DOCTYPE html>
<html lang="en">
<head>
<title>Electricity Bill</title>
<style>
label{
margin-right: 15%;
}
form{
text-align: center;
}
</style>
</head>
<body>
<h1 align="center">ELECTRICITY BILL</h1>
<div>
<form action="electricitybilloutput.php" method="post">
<label>Enter the consumer number: </label>
<input type="text" name="cnumber"><br><br>
<label>Enter the consumer name: </label>
<input type="text" name="cname"><br><br>
<label>Enter the previous reading: </label>
<input type="text" name="prevread"><br><br>
<label>Enter the present reading: </label>
<input type="text" name="presread"><br><br>
<input type="submit" name="submit">
</form>
</div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$number = $_REQUEST['cnumber'];
$name = $_REQUEST['cname'];
$prevread = $_REQUEST['prevread'];
$presread = $_REQUEST['presread'];
$units = $presread-$prevread;
if($units<100){ $amt = 3*$units; }
elseif($units>=100 && $units<200){ $amt = 4*$units; }
else if($units>=200 && $units<=300){ $amt=5*$units; }
else{ $amt=6*$units; }
echo "Consumer Number: $number"."<br>"."Consumer Name:
$name"."<br>";
echo "Previous Reading: $prevread"."<br>"."Present Reading:
$presread"."<br>";
echo "Units Consumed: $units"."<br>"."Amount: $amt"."<br>";
}
?>
</div>
</body>
</html>
