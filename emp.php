<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hello1";
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['submit'])) 
    {
        $emp=$_POST['emp'];
        $name = $_POST['name'];
        $email = $_POST['emails'];
        $sal = $_POST['sal'];
        $phno = $_POST['phno'];
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT into employee(emp,name,email,sal,phno) values ('$emp','$name','$email','$sal','$phno')";
        if (mysqli_query($conn, $sql))
            echo "inserted";
    }
    $sql = "SELECT * FROM Employee WHERE emp BETWEEN 101 AND 200";
    $result = $conn->query($sql);
    // Check if there are any records
    if ($result->num_rows > 0) 
    {
        echo "<h2>Data from Database</h2>";
        echo "<table>";
        echo "<tr><th>Employee ID</th><th>Name</th><th>Email</th><th>Salary</th><th>Phone Number</th></tr>";
        // Output data of each row
        while ($row = $result->fetch_assoc()) 
        {
            echo "<tr><td>".$row["emp"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["sal"]."</td><td>".$row["phno"]."</td></tr>";
        }
        echo "</table>";
    } 
    else 
    {
        echo "No data found.";
    }
    // Close the database connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    h2 {
        text-align: center;
    }

    table {
        width: 50%;
        margin: 30px auto;
        border-collapse: collapse;
        text-align: left;
    }

    tr {
        border-bottom: 1px solid #cbcbcb;
    }

    th,
    td {
        border: none;
        height: 30px;
        padding: 2px;
    }

    tr:hover {
        background: #F5F5F5;
    }
</style>

<body>
    <form method="POST">
        employee_id: <input type="number" name="emp">
        name: <input type="text" name="name">
        salary: <input type="number" name="sal">
        phone_number: <input type="number" name="phno">
        email: <input type="email" name="emails">
        
        <input type="submit" value="SUBMIT" name="submit">
    </form>
</body>

</html>