
<!DOCTYPE html>
<html>
<head>
  <title>Uncommon Characters</title>
</head>
<body>
  <h1>Uncommon Characters</h1>
  <form method="post" action="">
    <label for="string1">String 1:</label>
    <input type="text" name="string1">
    <br>
    <label for="string2">String 2:</label>
    <input type="text" name="string2">
    <br>
    <button type="submit" name="submit">Find Uncommon Characters</button>
  </form>

<?php
if (isset($_POST['submit'])) {
  $string1 = $_POST['string1'];
  $string2 = $_POST['string2'];

  $uncommonCharacters = "";

  for ($i = 0; $i < strlen($string1); $i++) {
    if (strpos($string2, $string1[$i]) === false && strpos($uncommonCharacters, $string1[$i]) === false) {
      $uncommonCharacters .= $string1[$i];
    }
  }

  for ($i = 0; $i < strlen($string2); $i++) {
    if (strpos($string1, $string2[$i]) === false && strpos($uncommonCharacters, $string2[$i]) === false) {
      $uncommonCharacters .= $string2[$i];
    }
  }

  echo "<label for='result'>Uncommon Characters:</label>";
  echo "<p>$uncommonCharacters</p>";
}
?>
</body>
</html>
