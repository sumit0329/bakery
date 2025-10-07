<?php
// Static About Us page for Twenty 8 Bakery
?>
<!DOCTYPE html>
<html>
<head>
    <title>About Us | Twenty 8 Bakery</title>
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
            background-color: #ddd;
            color: black;
        }

        .nav a.active {
            background-color: #04AA6D;
            color: white;
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
        }
    </style>
</head>
<body>
    <div class="header">
        <h1><img src="images/lastlogo.jpg" alt="Twenty 8 Bakery Logo" height="200" width="450"></h1>
    </div>

    <div class="nav">
        <a href="dashboard.php">Home</a>
        <a href="view_product.php">Product</a>
        <a href="contactus.php">Contact Us</a>
        <a href="aboutus.php" class="active">About Us</a>
        <a href="login.php">Login</a>
    </div>

    <section class="about-section">
        <img src="images/bakery_team.jpg" alt="Our Bakery Team" class="about-img">

        <div class="about-text">
            <h2>Welcome to Twenty 8 Bakery</h2>
            <p>Established in 2025, <strong>Twenty 8 Bakery</strong> is a proudly local artisan bakery, committed to bringing the joy of freshly baked bread and pastries to our community. Every product we create is made from carefully sourced, high-quality ingredients.</p>

            <p>Our passionate team of bakers start each day before dawn, ensuring every loaf, tart, and cake is baked with care. From warm sourdoughs and croissants to beautifully designed celebration cakes, we offer a wide variety of products that cater to every taste.</p>

            <p>We believe in blending <em>traditional techniques</em> with modern flavors, creating an experience that’s both comforting and inspiring. At Twenty 8 Bakery, baking isn’t just a craft — it’s our way of spreading happiness.</p>
        </div>
    </section>

    <div class="quote">
        “Life is what you bake it — and at Twenty 8 Bakery, we bake it with love and passion.”
    </div>

    <footer>
        <p>&copy; 2025 Twenty 8 Bakery | Baked with ❤️ every day</p>
    </footer>
</body>
</html>
