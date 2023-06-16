<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Functions of php</title>
</head>
<body>
<?php
$var = true;
echo "Type of var is: ".gettype($var)."<br>";
settype($var,"integer");
echo "Type of var has been changed to: ".gettype($var)."<br>";
$var2=90;
if(isset($var2)){
echo "var2 variable is set"."<br>";
unset($var2);
echo "var2 has now been unset"."<br>";
}
?>
</body>
</html>
