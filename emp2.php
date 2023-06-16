
<!DOCTYPE html>
<html>
<head>
  <title>Employee Details</title>
</head>
<body>
  <h1>Employee Details</h1>
  <form method="get" action="">
    <label for="employeeid">Select Employee ID:</label>
    <select name="employeeid">
      <?php
      // Connect to the database
      $host = "localhost";
      $username = "root";
      $password = "";
      $database = "hello1";
      $connection = mysqli_connect($host, $username, $password, $database);

      // Check connection
      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
      }

      // Retrieve employee IDs from the database
      $query = "SELECT emp FROM employee";
      $result = mysqli_query($connection, $query);

      // Generate dropdown options
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row['emp'] . "'>" . $row['emp'] . "</option>";
      }

      // Close the database connection
      mysqli_close($connection);
      ?>
    </select>
    <br>
    <button type="submit" name="submit">Get Details</button>
  </form>

  <?php
  if (isset($_GET['submit'])) {
    // Retrieve the selected employee ID
    $selectedEmployeeID = $_GET['employeeid'];

    // Connect to the database
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "hello1";
    $connection = mysqli_connect($host, $username, $password, $database);

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
    }

    // Retrieve employee details from the database
    $query = "SELECT * FROM employee WHERE emp = '$selectedEmployeeID'";
    $result = mysqli_query($connection, $query);

    // Display the employee details
    if ($row = mysqli_fetch_assoc($result)) {
      echo "<h2>Employee ID: " . $row['emp'] . "</h2>";
      echo "<p>Name: " . $row['name'] . "</p>";
      //echo "<p>Department: " . $row['department'] . "</p>";
      echo "<p>Salary: " . $row['sal'] . "</p>";
    } else {
      echo "<p>No employee found with the selected ID.</p>";
    }

    // Close the database connection
    mysqli_close($connection);
  }
  ?>
</body>
</html>
