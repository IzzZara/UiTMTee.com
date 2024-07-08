<?php
session_start();
require_once 'dbconnect.php'; // Include your database connection file

if (isset($_SESSION['id']) && isset($_POST['order_details']) && isset($_FILES['receipt'])) {
    // Get the customer ID from the session
    $username = $_SESSION['id'];

    // Decode the JSON string containing order details
    $orderDetails = json_decode($_POST['order_details'], true);
    
    // Handle file upload for the receipt
    $targetDir = "receipts/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    $targetFile = $targetDir . basename($_FILES["receipt"]["name"]);
    if (move_uploaded_file($_FILES["receipt"]["tmp_name"], $targetFile)) {
        // File uploaded successfully
    } else {
        // File upload failed
        echo "Error uploading receipt file.";
        exit();
    }

    // Prepare and execute SQL query to insert order into order_customer table
    $orderDate = date("Y-m-d");
    $orderStatus = "Successful"; // You may change this status according to your workflow
    $adminId = 2022454092; // Assuming you have an admin ID, adjust this accordingly
    $img = $targetFile; // Store the uploaded file path in the database
    $insertOrderQuery = "INSERT INTO order_customer (ORDER_DATE, ORDER_STATUS, ADMIN_ID, CUS_ID, IMG) VALUES ('$orderDate', '$orderStatus', '$adminId', '$username', '$img')";
    $result = mysqli_query($connect, $insertOrderQuery);
    
    if ($result) {
        // Get the last inserted order ID
        $orderId = mysqli_insert_id($connect);

        // Iterate through order details and insert into order_detail table
        foreach ($orderDetails as $item) {
            $cloNum = $item['CLO_NUM']; // Assuming this is the clothing number
            $quantity = $item['QUANTITY']; // Assuming this is the quantity
            $insertDetailQuery = "INSERT INTO order_details (ORDER_ID, CLO_NUM, QUANTITY) VALUES ('$orderId', '$cloNum', '$quantity')";
            $detailResult = mysqli_query($connect, $insertDetailQuery);

            if (!$detailResult) {
                // Error inserting order details
                echo "Error inserting order details: " . mysqli_error($connect);
                exit();
            }
        }

        // Redirect the user to a success page
        header("Location: homepageUser.php");
        exit();
    } else {
        // Error inserting order into order_customer table
        echo "Error inserting order: " . mysqli_error($connect);
        exit();
    }
} else {
    // Redirect the user if session or form data is missing
    header("Location: userpaymentmethode.php");
    exit();
}
?>