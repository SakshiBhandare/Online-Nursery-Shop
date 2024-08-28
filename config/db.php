<?php 
   $con = mysqli_connect('localhost', 'root', '', 'nursery');
   if (!$con) {
    die('Connection failed: ' . mysqli_error($con));
   }
?>