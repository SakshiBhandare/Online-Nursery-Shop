<?php
    require_once('config/db.php');
    $query = "select * from buynow";
    $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ugaoo.com/Admin Login/Products</title>
    <link rel="stylesheet" href="RegisterReport.css">
    <link rel="shortcut icon" href="Img/earth.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="toppest"> 
        <div class="container">
            <div class="header">
                <div class="banner">
                    <img src="Img/earth.png" alt="" height="50px" width="50px">
                    <h3>Ugaoo Nursery</h3>
                </div>
                
                <nav>
                <ul>
                        <li><a href="RegisterReport.php" class="active">Registration</a></li>
                        <li><a href="BuyReport.php">Seeds</a></li>
                        <li><a href="FlowerSeedReport.php">Flower Seeds</a></li>
                        <li><a href="BuyPlantsReport.php">Plants</a></li>
                        <li><a href="FruitPlantReport.php">Fruit Plants</a></li>
                        <li><a href="FeedbackReport.php">Feedback</a></li>
                    </ul>
                </nav>
    
                <div class="icons">
                    <p>Welcome, Admin</p>
                </div>
            </div>
        </div>

        <div class="bg">
            <div class="con">
                <div class="col">
                    <h2>Report Sheet of the Buyers</h2>
                </div>

                <div class="tab">
                    <table>
                        <tr>
                            <th>Country</th>
                            <th>Username</th>
                            <th>Address</th>
                            <th>Landmark</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Pincode</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Product Type</th>
                            <th>Product</th>
                            <th>Quantity</th>
                        </tr>

                        <tr>
                            <?php 
                                while($row = mysqli_fetch_assoc($result))
                                {
                            ?>
                            <td><?php echo $row['country']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['landmark']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo $row['state']; ?></td>
                            <td><?php echo $row['pincode']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            <td><?php echo $row['producttype']; ?></td>
                            <td><?php echo $row['product']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                        </tr>
                            <?php 
                                }
                            ?>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>