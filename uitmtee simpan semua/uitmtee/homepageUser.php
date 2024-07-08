<?php
session_start(); // Start the session

// Access session variable

$username= $_SESSION['id'];

// Check if session variable exists
if(isset($_SESSION['id'])) {
   // echo "ID from login.php: " . $username;
} else {
    echo "Session variable 'uname' not found.";
}

require_once 'functions.php';
require_once 'orderfunction.php';

// Fetch customer data and order data using the customer ID
$result = display_data($username);
$display = display_orderdata($username);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>User Dashboard</title>
    <style>     =
         /* Styles for the heading "CATALOGUE" */
        .home-heading {
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add shadow effect */
            text-align: center;
            margin-top: 200; 
            font-size: 40px;
            letter-spacing: 2px; /* Add space between letters */
        }
        .profile-sidebar {
            background: rgba(255, 255, 255, 0.35);
            padding: 20px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }
        .profile-sidebar p {
            margin: 10px 0;
        }
        .profile-sidebar .profile-settings {
            background-color: #444;
            color: white;
            border: none;
            padding: 10px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .profile-sidebar .profile-settings:hover {
            background-color: #666;
        }
        .profile-picture {
            margin-bottom: 20px;
        }
        .profile-picture img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .right-section {
            width: 65%;
        }
        .greeting {
            background: rgba(255, 255, 255, 0.35);
            padding: 20px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }
        .order-details {
            background-color: rgba(255, 255, 255, 0.35);
            padding: 20px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            color: white;
        }
        .order {
            background-color: rgba(0, 0, 0, 0.2);
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
        }    
    </style>
</head>
<body>
    <?php include('head.php'); ?>
    <!-- Heading "HOME" -->
    <h2 class="home-heading">HOME</h2>

    <div class="container">
        <div class="left-section">
            <div class="profile-sidebar">
                <h2 align="center">Profile</h2>
                <?php 
                $row = mysqli_fetch_assoc($result);
                ?>
                <p>Name: <?php echo $row['CUS_NAME']; ?></p>
                <p>Phone: <?php echo $row['CUS_PHONE']; ?></p>
                <p>Email: <?php echo $row['CUS_EMAIL']; ?></p>
                <p>Address: <?php echo $row['CUS_ADDRESS']; ?></p>
            </div>
        </div>
        <div class="right-section">
            <div class="greeting">
                <h2 align="center">Hi, <?php echo $row['CUS_NAME']; ?></h2>
                <p>Welcome back! We hope you have a great day ahead.</p>
            </div>
            <div class="order-details">
                <h2 align="center">Order Details</h2>
                <?php 
                while ($row = mysqli_fetch_assoc($display)) {
                ?>
                    <div class="order">
                        <h3>Order ID: <?php echo $row['ORDER_ID']; ?></h3>
                        <p>Order Date: <?php echo $row['ORDER_DATE']; ?></p>
                        <p>Order Status: <?php echo $row['ORDER_STATUS']; ?></p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
