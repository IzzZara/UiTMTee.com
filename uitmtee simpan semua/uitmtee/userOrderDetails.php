<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(249, 249, 249, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        /* Flexbox container for orders */
        .orders-container {
            display: flex;
            flex-wrap: wrap; /* Allow orders to wrap to the next line */
            justify-content: center; /* Center items horizontally */
            gap: 20px; /* Add some space between orders */
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        /* Styling for headings */
        h2 {
            margin-top: 0;
            text-align: center;
        }
        /* Styling for order details */
        .order-details {
            margin-top: 20px;
        }
        .order-details p {
            margin: 5px 0;
        }
        /* Styling for item list */
        .item-list {
            margin-top: 10px;
            padding-left: 20px;
            list-style: none; /* Remove default list styles */
        }
        .item-list li {
            margin-bottom: 5px;
        }
        /* Styling for the proceed button */
        .proceed-button {
            width: 100%;
            padding: 10px;
            background-color: dodgerblue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .proceed-button:hover {
            background-color: deepskyblue;
        }
        footer {
            padding: 5px;
            text-align: center;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.05);
            margin-top: 50px;
        }
    </style>
</head>

    </style>
</head>
<body> 
    <?php include ('head.php');?>
<br>
<h1>Payment Bil</h1>
<div class = "container">
<div class = "order-container">
</div>

<?php include ('footer.php');?>
</body>
</html>



