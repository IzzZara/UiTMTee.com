<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Product Catalog</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: url("fp.png") no-repeat center center fixed;
        background-size: cover;
      }
      /* Styles for navigation bar converted to sidebar */
      header {
        background-color: #ffd2e7;
        padding: 10px 20px;
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
      /* Styles for products */
      .container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        padding: 50px;
        z-index: 500; /* Lower than sidebar */
      }
      .product {
        flex: 1 1 300px;
        background-color: #d8bfd8;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        text-align: center;
      }
      .product img {
        max-width: 80%;
        height: 150px; /* Corrected value for height */
      }
      /* Styles for the heading "CATALOGUE" */
      .catalogue-heading {
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Add shadow effect */
        text-align: center;
        margin-top: 20px;
        font-size: 40px;
        letter-spacing: 7px; /* Add space between letters */
      }
      .product button:hover {
        background-color: #5a005a; /* Darker purple on hover */
      }
      .cart-sidebar {
        width: 40%;
        border-radius: 5px;
        background-color: #eee;
        margin-left: 20px;
        padding: 15px;
        text-align: center;
      }
      .head {
        background-color: violet;
        border-radius: 3px;
        height: 40px;
        padding: 10px;
        margin-bottom: 20px;
        color: white;
        display: flex;
        align-items: center; /* Fixed typo */
      }
      .foot {
        display: flex;
        justify-content: space-between;
        margin: 20px 0px;
        padding: 10px 0px;
        border-top: 1px solid #333;
      }
      .box {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        border: 1px solid violet;
        border-radius: 5px;
        padding: 15px;
      }
      .img-box {
        width: 100%;
        height: 180px;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .images {
        max-width: 90%;
        max-height: 90%;
        object-fit: cover;
        object-position: center;
      }
      .bottom {
        margin-top: 20px;
        width: 100%;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        height: 110px;
      }
      h2 {
        font-size: 20px;
        color: red;
      }
      button {
        width: 100%;
        position: relative;
        border: none;
        border-radius: 5px;
        background-color: violet;
        padding: 7px 25px;
        cursor: pointer;
        color: white;
      }
      button:hover {
        background-color: #333;
      }
      .cart-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
        background-color: white;
        border-bottom: 1px solid #aaa;
        border-radius: 3px;
        margin: 10px 10px;
      }
      .row-img {
        width: 50px;
        height: 50px;
        border-radius: 50px;
        border: 1px solid violet;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .rowimg {
        max-width: 43px;
        max-height: 43px;
        border-radius: 50%;
      }
      .remove-button {
        width: auto; /* Adjust the width to fit content */
        padding: 5px 15px; /* Adjust padding for better appearance */
        background-color: violet; /* Violet background color for remove button */
        color: white;
        border: none;
        border-radius: 15px; /* Rounder button */
        cursor: pointer;
      }
      .remove-button:hover {
        background-color: #5a005a; /* Darker violet on hover */
      }
      .proceed-button {
        width: auto; /* Adjust the width to fit content */
        padding: 5px 15px; /* Adjust padding for better appearance */
        background-color: violet; /* Violet background color for remove button */
        color: white;
        border: none;
        border-radius: 15px; /* Rounder button */
        cursor: pointer;
      }
      .proceed-button:hover {
        background-color: darkviolet; /* Darker violet on hover */
      }
      footer {
        padding: 5px;
        text-align: center;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.05);
        margin-top: 50px;
      }
      .search-bar {
        margin-right: 20px;
        display: flex;
        align-items: center;
      }
      .search-bar input[type="text"] {
        padding: 5px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }
      .search-bar button {
        padding: 5px 10px;
        font-size: 16px;
        border: none;
        background-color: #9c27b0;
        color: white;
        cursor: pointer;
        border-radius: 4px;
        margin-left: 5px;
      }
      .search-bar button:hover {
        background-color: #7b1fa2;
      }

    </style>
  </head>
  <body background="fp.png">
    <header>
      <div class="logo-container">
        <!-- Logo -->
        <img src="uitm2.png" alt="Logo" class="logo" />
        <!-- Text next to the logo -->
        <div class="header-text">UiTMTee.com Dashboard</div>
      </div>
      <div class="search-bar">
        <input type="text" id="search-input" placeholder="Search for a clothing..." />
        <button onclick="searchJerseys()">Search</button>
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

    <!-- Heading "CATALOGUE" -->
    <h2 class="catalogue-heading">CATALOGUE</h2>

    <div class="container" id="root"></div>

    <div class="cart-sidebar">
      <div class="head"><p>My Cart</p></div>
      <div id="cartItem">Your cart is empty</div>
      <div class="foot">
        <h3>Total</h3>
        <h2 id="total">RM0.00</h2>
      </div>

        <form id="cartForm" action="userpaymentmethode.php" method="POST">
        <div class="proceed-button">
          <button type="submit" onclick="prepareCartData()">
            Proceed Order
          </button>
    </div>

    <script>
      const product = [
        {
          id: 0,
          image: "j1.png",
          title: "UiTM Lioness V3",
          price: 65,
          size: ["XS", "S", "M", "L","XL", "XXL", "XXXL", "XXXXL"],
        },
        {
          id: 1,
          image: "j3.png",
          title: "UiTM Lioness V1",
          price: 56,
           size: ["XS", "S", "M", "L","XL", "XXL", "XXXL", "XXXXL"],
        },
        {
          id: 2,
          image: "j2.png",
          title: "UiTM Lioness V2",
          price: 60,
           size: ["XS", "S", "M",  "L", "XL", "XXL", "XXXL", "XXXXL"],
        },
        {
          id: 3,
          image: "j10.png",
          title: "KPPIM Jersey",
          price: 45,
           size: ["XS", "S", "M",  "L","XL", "XXL", "XXXL", "XXXXL"],
        },
        {
          id: 4,
          image: "j99.png",
          title: "UiTM Black",
          price: 65,
          size: ["XS", "S", "M",  "L","XL", "XXL", "XXXL", "XXXXL"],
        },
        {
          id: 5,
          image: "j77.png",
          title: "Korporat FSG",
          price: 80,
           size: ["XS", "S", "M",  "L","XL", "XXL", "XXXL", "XXXXL"],
        },
        {
          id: 6,
          image: "j23.png",
          title: "Korporat KPPIM",
          price: 75,
           size: ["XS", "S", "M",  "L","XL", "XXL", "XXXL", "XXXXL"],
        },
        {
          id: 7, // Corrected the duplicate id
          image: "j01.png",
          title: "Korporat FP",
          price: 85,
           size: ["XS", "S", "M", "L","XL", "XXL", "XXXL", "XXXXL"],
        },
        {
          id: 8, // Corrected the duplicate id
          image: "k1.png",
          title: "Korporat BASCO",
          price: 85,
           size: ["XS", "S", "M","XL", "XXL", "XXXL", "XXXXL"],
        },
                {
          id: 9, // Corrected the duplicate id
          image: "k2.png",
          title: "Korporat DiSK",
          price: 85,
           size: ["XS", "S", "M", "L","XL", "XXL", "XXXL", "XXXXL"],
        },
                {
          id: 10, // Corrected the duplicate id
          image: "k3.png",
          title: "Korporat MASSCOM",
          price: 80,
           size: ["XS", "S", "M", "L","XL", "XXL", "XXXL", "XXXXL"],
        },
                {
          id: 11, // Corrected the duplicate id
          image: "k4.png",
          title: "Korporat EEC",
          price: 83,
           size: ["XS", "S", "M", "L","XL", "XXL", "XXXL", "XXXXL"],
        },
        {
          id: 12, // Corrected the duplicate id
          image: "jj1.png",
          title: "UiTM Muslimah Jersey",
          price: 55,
           size: ["XS", "S", "M", "L","XL", "XXL", "XXXL", "XXXXL"],
        },
        {
          id: 13, // Corrected the duplicate id
          image: "jj2.png",
          title: "UiTM Long Sleeve",
          price: 55,
           size: ["XS", "S", "M", "L","XL", "XXL", "XXXL", "XXXXL"],
        },
        {
          id: 14, // Corrected the duplicate id
          image: "jj3.png",
          title: "KPPIM Jersey V2",
          price: 60,
           size: ["XS", "S", "M", "L","XL", "XXL", "XXXL", "XXXXL"],
        },
        {
          id: 15, // Corrected the duplicate id
          image: "jj4.png",
          title: "KPPIM Jersey V3",
          price: 65,
           size: ["XS", "S", "M", "L","XL", "XXL", "XXXL", "XXXXL"],
        },
      ];

      const container = document.getElementById("root");

    product.forEach((item) => {
      const productDiv = document.createElement("div");
      productDiv.className = "product";

      const img = document.createElement("img");
      img.src = item.image;
      img.alt = item.title;
      img.className = "images";

      const title = document.createElement("div");
      title.className = "product-title";
      title.textContent = item.title;

      const selectDiv = document.createElement("div");
      selectDiv.className = "product-size";

      const sizeSelect = document.createElement("select");
      sizeSelect.name = `size-${item.id}`;

      item.size.forEach((sizeOption) => {
        const option = document.createElement("option");
        option.value = sizeOption;
        option.textContent = sizeOption;
        sizeSelect.appendChild(option);
      });

      const price = document.createElement("div");
      price.className = "product-price";
      price.textContent = `RM${item.price.toFixed(2)}`;

      const button = document.createElement("button");
      button.textContent = "Add to cart";
      button.onclick = () => addtocart(item.id, sizeSelect.value);

      productDiv.appendChild(img);
      productDiv.appendChild(title);
      selectDiv.appendChild(sizeSelect);
      productDiv.appendChild(selectDiv);
      productDiv.appendChild(price);
      productDiv.appendChild(button);

      container.appendChild(productDiv);
    });

    var cart = [];

    function addtocart(id, size) {
  const productToAdd = {...product[id], size: size};

  cart.push(productToAdd);
  localStorage.setItem('cart', JSON.stringify(cart)); // Store cart items in localStorage
  displaycart();
}


      const form = document.getElementById("cartForm");
      

    function displaycart() {
      let total = 0;
      if (cart.length == 0) {
        document.getElementById("cartItem").innerHTML = "Your cart is empty";
        document.getElementById("total").textContent = "RM0.00";
      } else {
        document.getElementById("cartItem").innerHTML = cart
          .map((items, index) => {
            var { image, title, price, size } = items;
            total += price;
            return `<div class='cart-item'>
                      <div class='row-img'>
                          <img class='rowimg' src=${image}>
                      </div>
                      <p style='font-size:12px;'>${title} - ${size}</p> 
                      <h2 style='font-size: 15px;'>RM ${price.toFixed(2)}</h2>
                      <button class='remove-button' onclick='delElement(${index})'>Remove</button>
                  </div>`;
          })
          .join("");

        document.getElementById("total").textContent = `RM${total.toFixed(2)}`;
      }
    }

    function delElement(index) {
      cart.splice(index, 1);
      displaycart();
    }

    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
    }

    function searchJerseys() {
      const input = document.getElementById("search-input").value.toLowerCase();
      const products = document.getElementsByClassName("product");

      for (let i = 0; i < products.length; i++) {
        const productName = products[i].getElementsByClassName("product-title")[0].innerText.toLowerCase();
        if (productName.includes(input)) {
          products[i].style.display = "block";
        } else {
          products[i].style.display = "none";
        }
      }
    }
  </script>

  <footer>
    <p>&copy; 2024 UiTMTee. All rights reserved.</p>
  </footer>
</body>
</html>