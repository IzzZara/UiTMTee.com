<?php 
require_once 'dbconnect.php';
require_once 'functionfeedback.php'; 

$result = displayfeedback();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback View for Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .feedback {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
            transition: box-shadow 0.3s ease;
        }
        .feedback:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .message-id {
            font-weight: bold;
            color: #333;
        }
        .message {
            margin-top: 10px;
            color: #666;
        }
        .submission-date, .customer-username {
            color: #999;
            font-size: 0.9em;
        }
    </style>
</head>
<body background="fp.png">
    <?php include('adminheader.php'); ?>
    <div class="container">
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <div class="feedback">
            <div class="message-id">Message ID: <?php echo $row['MESSAGE_ID'];?></div>
            <div class="submission-date">Submission Date: <?php echo $row['SUBMISSION_DATE'];?></div>
            <div class="customer-username">Customer ID: <?php echo $row['CUS_ID'];?></div>
            <div class="message"><?php echo $row['MESSAGE'];?></div>
            
        </div>
        <?php } ?>
    </div>

    <!-- Footer -->
    <?php include('footer.php'); ?>
</body>
</html>
