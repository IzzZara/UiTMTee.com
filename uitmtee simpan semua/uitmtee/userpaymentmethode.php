<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Checkout Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('fp.png') no-repeat center center fixed;
            background-size: cover;
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
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .done-button {
            width: auto;
            padding: 5px 15px;
            background-color: violet;
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .proceed-button:hover,
        .done-button:hover {
            background-color: darkviolet;
        }
        .catalogue-heading {
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            font-style: italic;
            text-align: center;
            margin-top: 20px;
            font-size: 40px;
            letter-spacing: 7px;
        }
h1 {
            font-size: 24px;
            margin-top: 0;
        }
        h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }
        p {
            margin: 5px 0;
        }
        ul {
            margin: 5px 0;
            padding-left: 20px;
        }
        li {
            list-style-type: disc;
        }
        form {
            margin-top: 20px;
        }
        select, input[type="submit"], input[type="file"] {
            margin-top: 10px;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        footer {
            padding: 18px;
            text-align: center;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.05);
            margin-top: 50px;
        }
        /* Add your styles here */
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="uitm2.png" alt="UiTM Logo" class="logo">
            <div class="header-text">UiTMTee.com Dashboard</div>
        </div>
        <div class="openbtn" onclick="openNav()">☰ Menu</div>
    </header>
    
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <br>
        <a href="homepageUser.php"><i class="fa-solid fa-house"></i> Home</a>
        <br>
        <a href="c_uitmtee2.php"><i class="fa-solid fa-table-cells-large"></i> Catalogue</a>
        <br>
        <a href="userhelpncontact.php"><i class="fa-solid fa-message"></i> Help & Contact</a>
        <br>
        <a href="frontpage.html"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a>
    </div>
    <br>

    <div class="container">
        <h1 align="center">Order Summary</h1>
        <hr>
        <div id="checkout-details">
            <h2 align="center">Items Bought</h2>
            <ul id="items-list">
                <!-- List of items will be dynamically generated here -->
            </ul>
            <br>
            <h2>Total Amount to Pay</h2>
            <h3 style="color: orangered" id="total-amount">RM0</h3>
        </div>

        <form id="payment-form" action="update_order.php" method="post" enctype="multipart/form-data" onsubmit="handlePayment(event)">
            <hr>
            <h2>Scan Me To Make Payment!</h2>
            <div style="text-align: center;">
                <img src="sotong.jpg" height="550px" width="350px" alt="Centered Image">
            </div>
            <h2>Upload Transaction Receipt</h2>
            <input type="file" id="receipt" name="receipt" required>
            <input type="hidden" name="order_details" id="order_details">
            <br><br>
            <div align="center">
                <button type="submit" class="done-button">Done</button>
            </div>
        </form>
    </div>

    <script>
      function handlePayment(event) {
        var cart = JSON.parse(localStorage.getItem('cart'));
        document.getElementById('order_details').value = JSON.stringify(cart);
      }

      function populateItems() {
        var cart = JSON.parse(localStorage.getItem('cart'));
        var itemsList = document.getElementById('items-list');
        var totalAmount = 0;

        itemsList.innerHTML = ''; // Clear previous items

        if (cart && cart.length > 0) {
          cart.forEach(item => {
            var listItem = document.createElement('li');
            listItem.textContent = `${item.title} - ${item.size} - RM${item.price.toFixed(2)}`;
            itemsList.appendChild(listItem);
            totalAmount += item.price;
          });
        }

        var totalAmountDisplay = document.getElementById('total-amount');
        totalAmountDisplay.textContent = 'RM' + totalAmount.toFixed(2);
      }

      window.onload = populateItems;

      function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
      }
    </script>
</body>
</html>
