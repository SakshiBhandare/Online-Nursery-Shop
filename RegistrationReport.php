<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nursery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT column1, column2, column3 FROM table_name"; // Replace 'column1', 'column2', etc. with your actual column names
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 // Output data of each row
 echo "<table border='1'>";
 echo "<tr><th>Column1</th><th>Column2</th><th>Column3</th></tr>"; // Replace 'Column1', 'Column2', etc. with your actual column names

 while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row['column1']."</td><td>".$row['column2']."</td><td>".$row['column3']."</td></tr>"; // Replace 'column1', 'column2', etc. with your actual column names
 }

 echo "</table>";
} else {
 echo "0 results";
}

$conn->close();
?>