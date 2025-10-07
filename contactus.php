<?php
// Contact Us Page for Twenty 8 Bakery
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us | Twenty 8 Bakery</title>
    <style>
        body {
            background-image: url('images/back2.jpg');
            background-size: cover;
            font-family: 'Georgia', serif;
            margin: 0;
            color: #333;
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
        }
        .nav a {
            float: left;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .nav a.active {
            background-color: #04AA6D;
            color: white;
        }

        /* Contact Section */
        .contact-section {
            background-color: rgba(255, 248, 240, 0.95);
            margin: 60px auto;
            width: 80%;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            padding: 40px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .contact-info {
            max-width: 500px;
            margin: 20px;
        }
        .contact-info h2 {
            color: #c44d2d;
            font-size: 28px;
            margin-bottom: 15px;
        }
        .contact-info p {
            font-size: 18px;
            line-height: 1.6;
            margin: 8px 0;
        }
        .map {
            width: 450px;
            height: 300px;
            margin: 20px;
            border: 3px solid salmon;
            border-radius: 10px;
            overflow: hidden;
        }

        /* Quote Section */
        .quote {
            text-align: center;
            font-size: 24px;
            font-style: italic;
            margin-top: 30px;
            color: #333;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            .contact-section {
                flex-direction: column;
                text-align: center;
            }
            .map {
                width: 90%;
                height: 250px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>
            <img src="images/lastlogo.jpg" alt="Twenty 8 Bakery" height="200" width="400">
        </h1>
    </div>

    <div class="nav">
        <a href="index.php">Home</a>
        <a href="product.php">Products</a>
        <a class="active" href="contactus.php">Contact Us</a>
        <a href="aboutus.php">About Us</a>
        <a href="login.php">Login</a>
    </div>

    <div class="contact-section">
        <div class="contact-info">
            <h2>Get in Touch</h2>
            <p><strong>📞 Phone:</strong> +61 2 4567 8910</p>
            <p><strong>📧 Email:</strong> info@twenty8bakery.com</p>
            <p><strong>📍 Address:</strong> 28 Bread Street, Sydney, NSW, Australia</p>
            <p><strong>🕒 Opening Hours:</strong><br>
               Monday - Friday: 7:00 AM – 6:00 PM<br>
               Saturday - Sunday: 8:00 AM – 4:00 PM
            </p>
        </div>

        <div class="map">
            <iframe 
                src="https://www.google.com/maps?q=Sydney%20NSW%20Australia&output=embed"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>

    <div class="quote">
        “Baked with passion, served with love — because every day deserves something sweet.”
    </div>

    <footer>
        <p>&copy; 2025 Twenty 8 Bakery | All rights reserved.</p>
    </footer>
</body>
</html>
