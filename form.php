<!DOCTYPE html>
<html>
<head>
*error{color:#FF0000;}
</style>
</head>
<body>
    <?php
    $nameErr=$emailErr=$genderErr="";
    $name=$email=$gender=$comment="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST{"name"})){
            $nameErr="Name is required";
        }
        else{
            $name=test_input($_POST["name"]);
            if(!preg_match("/^[a-zA-Z]*$/",$name)){
                $nameErr="Only letters and whitespaces allowed";
            }
        }
        if(empty($_POST["email"])){
            $emailErr="Email is required";
        }
        else{
            $email=test_input($_POST["email"]);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr="Invalid mail format";
            }
        }
        if(empty($_POST["comment"])){
            $comment="";
        }
        else{
            $comment=test_input($_POST["comment"]);
        }
        if(empty($_POST["gender"])){
            $genderErr="Gender is required";
        }
        else{
            $gender=test_input($_POST["gender"]);
        }
    }
    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    ?>
    <h1>PHP Form Validation Example</h2>
    <p><span class="error">*required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name:<input type="text" name="name">
   <span class="error">* <?php echo $nameErr; ?></span>
   <br><br>
   Email:<input type="text" name="email">
   <span class="error">* <?php echo $emailErr; ?></span>
   <br><br>
   Comment:<textarea name="comment" rows="5" cols="40"></textarea>
   <br><br>
   Gender:<input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
   <input type="radio" name="gender" value="other">Other
   <span class="error">* <?php echo $genderErr; ?></span>
   <br><br>
   <input type="submit" name="submit" value="submit">
</form>
<?php
echo "<h2>YOUR INPUT: </h2>";
echo $name; echo "<br>";
echo $email; echo "<br>";
echo $website; echo "<br>";
echo $comment; echo "<br>";
echo $gender; echo "<br>";
?>
</body>
</html>