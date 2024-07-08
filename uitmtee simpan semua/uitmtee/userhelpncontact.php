<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Help and Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('fp.png') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        header { 
            background-color: #ffd2e7; 
            padding: 8px 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
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
        .container2 {
            width: 80%; /* Adjusted to span 80% of the width */
            margin: 0 auto; /* Center horizontally */
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px; /* Adjusted for maximum width */
            margin-top: 10px; /* Adjusted margin-top for spacing */
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
        .help-heading {
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add shadow effect */
            text-align: center;
            margin-top: 150px; 
            font-size: 40px;
            letter-spacing: 2px; /* Add space between letters */
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
        <!-- Logo -->
        <img src="uitm2.png" alt="Logo" class="logo" />
        <!-- Text next to the logo -->
        <div class="header-text">UiTMTee.com Dashboard</div>
      </div>
      <!-- Button to open the sidebar -->
      <div class="openbtn" onclick="openNav()">☰ Menu</div>
    </header>
    <!-- Sidebar -->
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
        >&times;</a
      >
      <br />
      <a href="homepageUser.php"><i class="fa-solid fa-house"></i> Home</a>
      <br />
      <a href="c_uitmtee2.php"
        ><i class="fa-solid fa-table-cells-large"></i> Catalogue</a
      >
      <br />
      <a href="userhelpncontact.php"
        ><i class="fa-solid fa-message"></i> Help & Contact</a
      >
      <br />
      <a href="frontpage.html"
        ><i class="fa-solid fa-right-from-bracket"></i> Log Out</a
      >
    </div>

    <!-- Heading "HELP & CONTACT" -->
    <h2 class="help-heading">HELP & CONTACT</h2>

    <div class="container2">
        <div class="message">
            <form name="form" method="POST" action="submit_contact.php">
            <!-- Reply form -->
            <div class="reply-form">
                <textarea name="message" placeholder="Please Write Your Comments..." required></textarea>
                <button type="submit">Submit</button>
            </div>
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
