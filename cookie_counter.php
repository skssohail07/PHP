<!DOCTYPE html>
<html>
<head>
<?php
// Start session
session_start();
// Check if the counter session variable exists, if not initialize it
if (!isset($_SESSION['counter'])) {
 $_SESSION['counter'] = 0;
}
// Check if the counter cookie exists, if not initialize it
$cookieCounter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
// Increment the counter in both session and cookie
$_SESSION['counter']++;
$cookieCounter++;
// Set the updated cookie value
setcookie('counter', $cookieCounter, time() + 3600); // Expires in 1 hour
// Display the session variable
echo "Session Counter: " . $_SESSION['counter'] . "<br>";
// Display the cookie variable
echo "Cookie Counter: " . $cookieCounter . "<br>";
?>
</body>
</html>
