<?php

if (isset($_POST['submit'])) {
    // Connect to MySQL database
    $dbConn = mysqli_connect('localhost', 'root', '', 'nursery');

    // Check connection
    if (!$dbConn) {
        die('Connection failed: ' . mysqli_error($dbConn));
    }

    // Get form data
    $username = $_POST['username'];
    $message = $_POST['message'];
    
    // Insert data into the database
    $sql = "INSERT INTO feedback (username, message) VALUES ('$username', '$message')";

    if (mysqli_query($dbConn, $sql)) {
        header('Location: FeedSuccess.html');
        exit();
    } else {
        echo 'Error: ' . mysqli_error($dbConn);
    }

    // Close the database connection
    mysqli_close($dbConn);
}

?>