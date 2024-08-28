<?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo '<p>Welcome, ' . $_SESSION['username'] . '</p>';
    } else {
        echo '<p>Please log in</p>';
    }
?>