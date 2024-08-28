<?php

session_start();

if (isset($_POST['submit'])) {
    // Connect to MySQL database
    $dbConn = mysqli_connect('localhost', 'root', '', 'nursery');

    // Check connection
    if (!$dbConn) {
        die('Connection failed: ' . mysqli_error($dbConn));
    }

    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if user exists
    $sql = "SELECT * FROM register WHERE username='$username' AND password='$password'";
    $result = mysqli_query($dbConn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];

        // Start the session and store the username
        session_start();
        $_SESSION['username'] = $username;

        // Redirect to homepage
        header('Location: HomeUser.html');
        exit();
    } else {
        echo 'Invalid login credentials';
    }

    // Close the database connection
    mysqli_close($dbConn);
}

?>

