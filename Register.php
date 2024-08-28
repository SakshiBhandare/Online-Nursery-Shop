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
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpass'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];

    // Hash the password
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO register (username, gender, password, cpass, contact, email, address1, address2) VALUES ('$username', '$gender', '$password', '$cpassword', '$contact', '$email', '$address1', '$address2')";

    if (mysqli_query($dbConn, $sql)) {
        header('Location: Successful.html');
        exit();
    } else {
        echo 'Error: ' . mysqli_error($dbConn);
    }

    // Close the database connection
    mysqli_close($dbConn);
}

?>