<?php
include ('dbconnect.php');
session_start();

// Get form data
$message = $_POST['message']; // 'message' corresponds to the 'name' attribute of the textarea
$submission_date = date("Y-m-d H:i:s"); // Assuming you want to store the submission date/time
$username = $_SESSION['id']; // Assuming the customer ID is stored in the session
$admin_id = 2022454092; // Replace this with the actual admin ID you want to use

// Initialize statement variables
$stmt_insert = null;

// Insert new feedback
$sql_insert = "INSERT INTO contact_messages (MESSAGE, SUBMISSION_DATE, CUS_ID, ADMIN_ID) VALUES (?, ?, ?, ?)";
$stmt_insert = $connect->prepare($sql_insert);
$stmt_insert->bind_param("ssii", $message, $submission_date, $username, $admin_id);
$stmt_insert->execute();
echo "Feedback sent successfully";

// Close statement
if ($stmt_insert) $stmt_insert->close();
$connect->close();
?>
