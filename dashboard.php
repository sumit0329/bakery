<?php
// filepath: c:\wamp64\www\Bakery_System\bakery\dashboard.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home | Twenty 8 Bakery</title>
    <style>
        body {
            margin: 0;
            font-family: 'Georgia', serif;
            background-image: url('images/back2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .header {
            padding: 20px;
            text-align: center;
            background-image: url('images/back4.jpg');
            background-size: 40% 100%;
            color: black;
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

        .about-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            padding: 60px 20px;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .about-img {
            width: 400px;
            border-radius: 10px;
            margin: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        .about-text {
            max-width: 600px;
            margin: 20px;
            background: #fff8f5;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .about-text h2 {
            color: #c44d2d;
            font-size: 28px;
            margin-bottom: 15px;
        }

        .about-text p {
            line-height: 1.8;
            font-size: 18px;
            color: #333;
        }

        .team-section {
            background-color: rgba(255,255,255,0.95);
            padding: 50px 20px;
            text-align: center;
        }

        .team-section h2 {
            color: #c44d2d;
            font-size: 30px;
            margin-bottom: 20px;
        }

        .team-group {
            width: 80%;
            margin: 0 auto 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        .team-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .team-member {
            background: #fff8f5;
            width: 280px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-5px);
        }

        .team-member img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .team-member h3 {
            color: #c44d2d;
            font-size: 22px;
            margin-bottom: 5px;
        }

        .team-member p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }

        .address-section {
            background-color: #fff3ef;
            padding: 40px 20px;
            text-align: center;
            border-top: 3px solid salmon;
        }

        .address-section h2 {
            color: #c44d2d;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .address-section p {
            font-size: 18px;
            color: #333;
            line-height: 1.6;
        }

        .quote {
            text-align: center;
            font-style: italic;
            font-size: 20px;
            margin: 40px 0;
            color: #444;
            background: #fff3ef;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 16px;
        }

        @media screen and (max-width: 768px) {
            .about-section {
                flex-direction: column;
                text-align: center;
            }
            .about-img {
                width: 80%;
            }
            .about-text {
                width: 90%;
            }
            .team-container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1><img src="images/lastlogo.jpg" alt="Twenty 8 Bakery Logo" height="200" width="450"></h1>
    </div>

    <div class="nav">
        <a href="dashboard.php" class="active">Home</a>
        <a href="view_product.php">Product</a>
        <a href="contactus.php">Contact Us</a>
        <a href="aboutus.php">About Us</a>
        <a href="login.php">Login</a>
    </div>
    <h2>Our Products</h2>

    <div class="product-container">
        <div class="gallery">
            <img src="images/pro1.jpg" alt="High Fibre White Loaf Bread">
            <div class="desc"><b>High Fibre White Loaf Bread</b></div>
            <div class="desc"><b>$5.95</b></div>
            <div class="desc"><button onclick="window.location.href='view_product.php'">BUY</button></div>
        </div>
        <div class="gallery">
            <img src="images/pro2.jpg" alt="White Block Loaf Bread">
            <div class="desc"><b>White Block Loaf Bread</b></div>
            <div class="desc"><b>$3.95</b></div>
            <div class="desc"><button onclick="window.location.href='view_product.php'">BUY</button></div>
        </div>
        <div class="gallery">
            <img src="images/pro3.jpg" alt="Round White Roll">
            <div class="desc"><b>Round White Roll</b></div>
            <div class="desc"><b>$1.95</b></div>
            <div class="desc"><button onclick="window.location.href='view_product.php'">BUY</button></div>
        </div>
    </div>
    
    <div class="quote">
        “Life is what you bake it — and at Twenty 8 Bakery, we bake it with love and passion.”
    </div>

    <section class="address-section">
        <h3>Visit Us</h3>
        <p><strong>Address:</strong> 28 Sweet Street, Sydney, NSW 2000, Australia</p>
        <p><strong>Opening Hours:</strong> Mon–Sat: 7:00 AM – 6:00 PM | Sun: 8:00 AM – 3:00 PM</p>
        <p><strong>Contact:</strong> (02) 9876 5432 | twenty8bakery@gmail.com</p>
    </section>

    <footer>
        <p>&copy; 2025 Twenty 8 Bakery | Baked with ❤️ every day</p>
    </footer>
</body>
</html>
