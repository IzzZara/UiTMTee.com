<?php

require_once('connection');
$sql = "SELECT * FROM customer";
$result = mysqli_query($condb,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Help and Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('fp.png') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh; /* Set minimum height to fill the viewport */
            display: flex;
            flex-direction: column;
        }
        header { 
            background-color: #ffffff; 
            padding: 8px 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .logo-container {
            display: flex;
            align-items: center;
        }
        .logo {
            width: 85px;
            height: auto;
        }
        .header-text {
            margin-left: 15px;
            color: black;
            font-size: 20px;
            font-weight: 600;
        }
        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #fff;
            color: #000000;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .openbtn:hover {
            background-color: #ce93d8;
            color: #fff;
        }
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(3px);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 20px;
            color: #9c27b0;
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #ddd;
            color: black;
        }
        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }
        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }
        .left-section {
            width: 30%;
        }
        .container2 {
            width: 80%; /* Adjusted to span 80% of the width */
            margin: 0 auto; /* Center horizontally */
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px; /* Adjusted for maximum width */
            margin-top: 50px; /* Adjusted margin-top for spacing */
        }

h1 {
            text-align: center;
        }
        .message {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .message .sender {
            font-weight: bold;
        }
        .message .date {
            color: #666;
            font-size: 0.9em;
        }
        .reply-form textarea {
            width: 97%;
            height: 100px;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            resize: none;
        }
        .reply-form button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .footer {
            padding: 15px 0;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.1); /* Transparent white color */
            border-radius: 0 0 25px 25px; /* Add rounded corners to the bottom of the footer */
            margin-top: auto; /* Push the footer to the bottom of the page */
            width: 100%; /* Make the footer span the entire width */
            box-sizing: border-box; /* Ensure padding and border are included in the width */
        }
    </style>
</head>
<body >
    <header>
        <div class="logo-container">
            <!-- Logo -->
            <img src="uitm2.png" alt="Logo" class="logo">
            <!-- Text next to the logo -->
            <div class="header-text">UiTMTee.com Admin</div>
        </div>
        <!-- Button to open the sidebar -->
        <div class="openbtn" onclick="openNav()">☰ Menu</div>
    </header>
    
    <!-- Sidebar -->
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <br>
        <a href="adminhomepage.php"><i class="fa-solid fa-house"></i> Home</a>
        <br>
        <a href="adminvieworder.php"><i class="fa-solid fa-table-cells-large"></i> Order Details</a>
        <br>
        <a href="index.php"><i class="fa-solid fa-message"></i> Update Stock</a>
        <br>
        <a href="frontpage.html"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a>
    </div>

    <!-- Content Section -->
    <div class="container2">
        <h1>Help and Contact</h1>
        <div class="message">
            <div class="sender">Student Name</div>
            <div class="date">Date: January 1, 2025</div>
            <p>Student's question goes here...</p>
        </div>




    <div class="container2">
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
            ?>
            <td><?php echo $row['stu_name'];?></td>
            
        
        </div>
        <?php
            }
?>


        <!-- Reply form -->
        <div class="reply-form">
            <textarea placeholder="Type your reply here..."></textarea>
            <button>Send Reply</button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> UiTMTee. All rights reserved.</p>
    </footer>

    <!-- JavaScript for Sidebar -->
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
        }
    </script>
</body>
</html>