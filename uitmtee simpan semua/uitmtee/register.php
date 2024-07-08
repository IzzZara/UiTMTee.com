<?php
session_start();
// Include db connection file
include("dbconnect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $cus_id = mysqli_real_escape_string($connect, $_POST['uname']);
    $cus_name = mysqli_real_escape_string($connect, $_POST['name']);
    $cus_phone = mysqli_real_escape_string($connect, $_POST['phone']);
    $cus_email = mysqli_real_escape_string($connect, $_POST['email']);
    $cus_address = mysqli_real_escape_string($connect, $_POST['address']);
    $cus_password =mysqli_real_escape_string($connect, $_POST['password']);

    // Prepare the SQL statement
    $stmt = $connect->prepare("INSERT INTO customer (CUS_ID, CUS_NAME, CUS_PHONE, CUS_EMAIL, CUS_ADDRESS, CUS_PASSWORD) VALUES (?, ?, ?, ?, ?, ?)");

    // Check if the prepare statement was successful
    if ($stmt === false) {
        die("Prepare failed: (" . $connect->errno . ") " . $connect->error);
    }

    // Bind the parameters
    if (!$stmt->bind_param("ssssss", $cus_id, $cus_name, $cus_phone, $cus_email, $cus_address, $cus_password)) {
        die("Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
    }

    // Execute the statement
    if (!$stmt->execute()) {
        die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    } else {
        echo "<script>window.location.href = 'login_registeration.html';</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $connect->close();
}
?>
