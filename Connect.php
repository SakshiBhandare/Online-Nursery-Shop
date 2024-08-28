
<?php

// NOT USED PAGE


// Database connection parameters
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "nursery";

// Create database connection
$dbConn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($dbConn->connect_error) {
  die("Connection failed: " . $dbConn->connect_error);
}

// Get submitted form data
$username = $_POST["username"];
$password = $_POST["password"];

// Validate login credentials
$sql = "SELECT * FROM login WHERE username='$username'";
$result = $dbConn->query($sql);

if ($result->num_rows > 0) {
  // Login successful
  // Redirect to secure area or perform other actions
  header('Location: HomeUser.html');
    exit();
} else {
  // Login failed
  echo "Invalid username or password";
}

// Close database connection
$dbConn->close();

?>
