<?php 
require_once 'dbconnect.php';
require_once 'functioncusorder.php';
$result = displayordercus();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin View Order</title>
    <style>
 
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: black;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        table th, table td {
            padding: 15px;
            text-align: left;
        }
        table thead {
            background-color: #f1f1f1;
        }
        table thead th {
            background-color: #007BFF;
            color: white;
        }
        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        table tbody tr:hover {
            background-color: #f1f1f1;
        }
        .status {
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
        }
        .status.delivered {
            background-color: #28a745;
        }
        .status.cancelled {
            background-color: #dc3545;
        }
        .status.shipped {
            background-color: #17a2b8;
        }
        .status.pending {
            background-color: #ffc107;
        }
        .actions button {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .actions .proceed-button {
            background-color: #007BFF;
            color: white;
        }
        .actions .proceed-button:hover {
            background-color: #0056b3;
        }
        .actions .delete-button {
            background-color: #dc3545;
            color: white;
        }
        .actions .delete-button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
   <?php include ('adminheader.php');?>
   <br>
   <br>
   <br>
    <div class="container">
        <h1>Customer's Orders</h1>
        <table border=1 id="orders-table">
                <tr bgcolor="light-blue">
                    <th>Id</th>
                    <th>Order Date</th>
                    <th>Status</th>
                </tr>
                 <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                    <th><?php echo $row['ORDER_ID'];?></th>
                    <th><?php echo $row['ORDER_DATE'];?></th>
                    <th><?php echo $row['ORDER_STATUS'];?></th>
                </tr>
                 <?php } ?>
             </table>
          
</div>
    <?php include('adminfooter.php');?>
</body>
</html>