<?php

if (isset($_POST['submit'])) {
    // Connect to MySQL database
    $dbConn = mysqli_connect('localhost', 'root', '', 'nursery');

    // Check connection
    if (!$dbConn) {
        die('Connection failed: ' . mysqli_error($dbConn));
    }

    // Get form data
    $country = $_POST['country'];
    $username = $_POST['username'];
    $address = $_POST['address'];
    $landmark = $_POST['landmark'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $producttype = $_POST['producttype'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];

    // Insert data into the database
    $sql = "INSERT INTO plant ( country, username, address, landmark, city, state, pincode, email, contact, producttype, product, quantity ) VALUES ('$country', '$username', '$address', '$landmark', '$city', '$state', '$pincode', '$email', '$contact', '$producttype', '$product', '$quantity'  )";

    if (mysqli_query($dbConn, $sql)) {
        header('Location: BNSuccess.html');
        exit();
    } else {
        echo 'Error: ' . mysqli_error($dbConn);
    }

    // Close the database connection
    mysqli_close($dbConn);
}

?>