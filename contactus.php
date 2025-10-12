<?php
// Contact Us Page for Twenty 8 Bakery
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us | Twenty 8 Bakery</title>
    <style>
        body {
            margin: 0;
            font-family: 'Georgia', serif;
            background-image: url('images/back2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            color: #333;
        }

        .header {
            padding: 20px;
            text-align: center;
            background-image: url('images/back4.jpg');
            background-size: 40% 100%;
            color: black;
        }

        /* Centered Navigation */
        .nav {
            background-color: salmon;
            text-align: center;
        }

        .nav a {
            display: inline-block;
            color: #fff;
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

        /* Contact Section */
        .contact-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 60px auto;
            width: 80%;
            background-color: rgba(255, 248, 240, 0.95);
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            padding: 40px;
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

        .quote {
            text-align: center;
            font-size: 22px;
            font-style: italic;
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
        <h1><img src="images/lastlogo.jpg" alt="Twenty 8 Bakery" height="200" width="400"></h1>
    </div>

    <div class="nav">
        <a href="dashboard.php">Home</a>
        <a href="view_product.php">Product</a>
        <a href="contactus.php" class="active">Contact Us</a>
        <a href="aboutus.php">About Us</a>
        <a href="login.php">Login</a>
    </div>

    <div class="contact-section">
        <div class="contact-info">
            <h2>Get in Touch</h2>
            <p><strong>📞 Phone:</strong> +61 0400 000 000</p>
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
