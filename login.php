
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted credentials
    $username = $_POST['username'];
    $password = $_POST['password'];

     $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;

    // Redirect to the welcome page or perform further actions
    header("Location: swap1.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>


Welcome


<?php
session_start();
  $username=$_SESSION['username']; 
 $password= $_SESSION['password'];
echo "this is welcome page";
echo $username;
echo "<br>";
echo $password;
?>