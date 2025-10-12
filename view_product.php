<?php
include "db.php"; // Make sure this file defines $conn

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["product_id"])) {
    $product_id = intval($_POST["product_id"]);
    $quantity = intval($_POST["quantity"]);
    $price = floatval($_POST["price"]);
    $customer_name = trim($_POST["customer_name"] ?? "");
    $customer_id = intval($_POST["customer_id"] ?? 0); // Get customer_id from POST (or set to 0 if not provided)
    $order_date = date('Y-m-d H:i:s');
    $total = $quantity * $price;

    if ($customer_name === "") {
        echo "<script>alert('Please enter your name.');</script>";
    } else {
        // Insert into orders table (columns: id, customer_name, customer_id, order_date, total, quantity)
        $stmt = $conn->prepare("INSERT INTO orders (customer_name, customer_id, order_date, total, quantity) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sdsdi", $customer_name, $customer_id, $order_date, $total, $quantity);
        $stmt->execute();
        $stmt->close();

        echo "<script>alert('✅ Order placed successfully!');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Twenty 8 Bakery</title>
    <style>
        body {
            background-image: url('images/back2.jpg');
            background-size: cover;
            background-attachment: fixed;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            padding: 20px;
            text-align: center;
            background-image: url('images/back4.jpg');
            background-size: 40% 100%;
            color: black;
            font-size: 20px;
        }

        .nav {
            background-color: salmon;
            overflow: hidden;
            text-align: center;
        }

        .nav a {
            color: #fff;
            display: inline-block;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 18px;
        }

         .nav a:hover {
            background-color: #03b300ff;
            color: black;
        }

        

        .nav a.active {
            background-color: #04AA6D;
            color: white;
        }

        h4 {
            font-size: 45px;
            background-color: #777;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }

        .product-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            width: 90%;
            margin: 30px auto;
        }

        .gallery {
            border: 1px solid #ccc;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.2s;
        }

        .gallery:hover {
            transform: scale(1.03);
        }

        .gallery img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .desc {
            padding: 10px 0;
            font-size: 16px;
            color: #333;
        }

        .desc button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .desc button:hover {
            background-color: #0056b3;
        }

        p {
            background-color: rgb(168, 165, 152);
            width: 400px;
            border: 10px solid rgb(23, 33, 23);
            padding: 50px;
            margin: 40px auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 align="center">
            <img src="images/lastlogo.jpg" alt="Twenty 8 Bakery Logo" height="250" width="500">
        </h1>
    </div>

    <div class="nav">
        <a href="dashboard.php">Home</a>
        <a href="view_product.php" class="active">Product</a>
        <a href="contactus.php">Contact Us</a>
        <a href="aboutus.php">About Us</a>
        <a href="login.php">Login</a>
    </div>

    <h4>Our Products</h4>

    <div class="product-container">
        <div class="gallery">
            <img src="images/pro1.jpg" alt="High Fibre White Loaf Bread">
            <div class="desc"><b>High Fibre White Loaf Bread</b></div>
            <div class="desc"><b>$5.95</b></div>
            <div class="desc"><button onclick="buyProduct(1, 5.95)">BUY</button></div>
        </div>

        <div class="gallery">
            <img src="images/pro2.jpg" alt="White Block Loaf Bread">
            <div class="desc"><b>White Block Loaf Bread</b></div>
            <div class="desc"><b>$3.95</b></div>
            <div class="desc"><button onclick="buyProduct(2, 3.95)">BUY</button></div>
        </div>

        <div class="gallery">
            <img src="images/pro3.jpg" alt="Round White Roll">
            <div class="desc"><b>Round White Roll</b></div>
            <div class="desc"><b>$1.95</b></div>
            <div class="desc"><button onclick="buyProduct(3, 1.95)">BUY</button></div>
        </div>
        <div class="gallery">
            <img src="images/pro4.jpg" alt="Wholemeal Bread">
            <div class="desc"><b>Wholemeal Bread</b></div>
            <div class="desc"><b>$4.50</b></div>
            <div class="desc"><button onclick="buyProduct(4, 4.50)">BUY</button></div>
        </div>  
        <div class="gallery">
            <img src="images/pro5.jpg" alt="Multigrain Bread">
            <div class="desc"><b>Multigrain Bread</b></div>
            <div class="desc"><b>$4.75</b></div>
            <div class="desc"><button onclick="buyProduct(5, 4.75)">BUY</button></div>
        </div>
        <div class="gallery">
            <img src="images/pro6.jpg" alt="Sourdough Bread">
            <div class="desc"><b>Sourdough Bread</b></div>
            <div class="desc"><b>$6.00</b></div>
            <div class="desc"><button onclick="buyProduct(6, 6.00)">BUY</button></div>
        </div>
        <div class="gallery">
            <img src="images/pro7.jpg" alt="Baguette">
            <div class="desc"><b>Baguette</b></div>
            <div class="desc"><b>$2.50</b></div>
            <div class="desc"><button onclick="buyProduct(7, 2.50)">BUY</button></div>  
        </div>
        <div class="gallery">
            <img src="images/pro8.jpg" alt="Gluten-Free Bread">
            <div class="desc"><b>Gluten-Free Bread</b></div>
            <div class="desc"><b>$7.00</b></div>
            <div class="desc"><button onclick="buyProduct(8, 7.00)">BUY</button></div>
        </div>
        <div class="gallery">
            <img src="images/pro9.jpg" alt="Ciabatta Bread">
            <div class="desc"><b>Ciabatta Bread</b></div>
            <div class="desc"><b>$5.50</b></div>
            <div class="desc"><button onclick="buyProduct(9, 5.50)">BUY</button></div>
        </div>
        <div class="gallery">   
            <img src="images/pro10.jpg" alt="Focaccia Bread">
            <div class="desc"><b>Focaccia Bread</b></div>
            <div class="desc"><b>$6.50</b></div>
            <div class="desc"><button onclick="buyProduct(10, 6.50)">BUY</button></div>
        </div>
        <div class="gallery">   
            <img src="images/pro11.jpg" alt="Rye Bread">
            <div class="desc"><b>Rye Bread</b></div>
            <div class="desc"><b>$4.25</b></div>
            <div class="desc"><button onclick="buyProduct(11, 4.25)">BUY</button></div>
        </div>
        <div class="gallery">
            <img src="images/pro12.jpg" alt="Brioche">
            <div class="desc"><b>Brioche</b></div>
            <div class="desc"><b>$3.75</b></div>
            <div class="desc"><button onclick="buyProduct(12, 3.75)">BUY</button></div>
        </div>
    </div>
    

    <p><font color="black">Our aim is to provide you good service and quality products.</font></p>

    <form id="buyForm" method="POST" style="display:none;">
        <input type="hidden" name="product_id" id="form_product_id">
        <input type="hidden" name="quantity" id="form_quantity">
        <input type="hidden" name="price" id="form_price">
        <input type="hidden" name="customer_name" id="form_customer_name">
        <input type="hidden" name="customer_id" id="form_customer_id" value="0">
    </form>

    <script>
    function buyProduct(productId, price) {
        let customerName = prompt("Enter your name:");
        if (!customerName || customerName.trim() === "") {
            alert("Please enter your name.");
            return;
        }
        let qty = prompt("Enter quantity:");
        qty = parseInt(qty);
        if (!isNaN(qty) && qty > 0) {
            document.getElementById("form_product_id").value = productId;
            document.getElementById("form_quantity").value = qty;
            document.getElementById("form_price").value = price;
            document.getElementById("form_customer_name").value = customerName.trim();
            // If you have a logged-in user, set customer_id here
            // document.getElementById("form_customer_id").value = USER_ID_FROM_SESSION;
            document.getElementById("buyForm").submit();
        } else {
            alert("Please enter a valid quantity.");
        }
    }
    </script>
</body>
</html>
