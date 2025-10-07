<?php
// You can add your PHP logic here if needed, for example, to fetch products from a database.
// For now, this page only displays static HTML content.
?>
<!DOCTYPE html>
<html>
<head>
    <title>Twenty 8 Bakery</title>
    <style>
        body {
            background-image: url('images/back2.jpg');
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
            color: #f2f2f2;
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
        nav.desc {
            padding: 5px;
            text-align: center;
        }
        * {
            box-sizing: border-box;
        }
        .responsive {
            padding: 0 6px;
            float: left;
        }
        @media only screen and (max-width: 700px) {
            .responsive {
                width: 25%;
                margin: 6px 0;
            }
        }
        @media only screen and (max-width: 500px) {
            .responsive {
                width: 5%;
                object-fit: fill;
            }
        }
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
        h3 {
            font-size: 45px;
            background-color: red;
            animation-name: example;
            animation-duration: 10s;
            animation-iteration-count: 20;
        }
        @keyframes example {
            0%   {background-color: red;}
            25%  {background-color: rgb(198, 198, 141);}
            50%  {background-color: rgb(124, 124, 162);}
            100% {background-color: rgb(140, 206, 140);}
        }
        @keyframes example2 {
            50%   {background-color:goldenrod;}
            100%  {background-color: rgb(174, 174, 159);}
        }
        h4 {
            font-size: 45px;
            background-color: #777;
        }
        p {
            background-color: rgb(168, 165, 152);
            width: 400px;
            border: 10px solid rgb(23, 33, 23);
            padding: 50px;
            margin: 20px;
            align-content: center;
            text-align: center;
            position: absolute;
            top: 670%;
            left: 50%;
            transform: translate(-50%, 50%);
        }
        .gallery img {
            width: 100%;
            height: auto;
        }
        .gallery {
            border: 1px solid #ccc;
            margin-bottom: 16px;
            background: #fff;
            padding: 8px;
        }
        .desc {
            text-align: center;
            margin: 4px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 align="center">
            <img src="images/lastlogo.jpg" alt="Sorry its coming..." height="250" width="500">
        </h1>
    </div>

    <div class="nav">
        <h2>
            <nav align="center">
                <a href="dashboard.php">Home</a> |
                <a href="view_product.php">Product</a> |
                <a href="contactus.php">Contact Us</a> |
                <a href="aboutus.php">About Us</a> |
                <a href="login.php">Login</a>
            </nav>
        </h2>
    </div>


    <p align="center">
        <font color="black">Our aim is to provide you good service and also provide the quality products.</font>
    </p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>About Us | Twenty 8 Bakery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <h1>About Us</h1>
</div>

<div class="about-section">
    <img src="images/bakery_team.jpg" alt="Bakery Team" class="about-img">
    <div class="about-text">
        <h2>Welcome to Twenty 8 Bakery</h2>
        <p>Established in 2025, Twenty 8 Bakery is dedicated to crafting the finest breads, pastries, and desserts using
        locally sourced ingredients. We believe in blending traditional baking techniques with modern flavors to create
        delightful treats for everyone.</p>
        <p>Our skilled bakers start early each morning to ensure every loaf and pastry is baked to perfection.
        Whether you're after a crispy croissant, a hearty sourdough, or a special cake for your celebration, Twenty 8 Bakery has it all!</p>
        <p>We are passionate about quality, freshness, and community. Thank you for being part of our journey.</p>
    </div>
</div>

<footer>
    <p>&copy; 2025 Twenty 8 Bakery | Baked with ❤️ every day</p>
</footer>

</body>
</html>

Conversation opened. 1 unread message.

Skip to content
Using Gmail with screen readers
1 of 2,872
Fwd:
Inbox

Sumit Shrestha <stha.sls08@gmail.com>
Attachments
23:00 (40 minutes ago)
to me



---------- Forwarded message ---------
From: Sumit Shrestha <stha.sls08@gmail.com>
Date: Sun, 28 Sep 2025 at 11:37 pm
Subject:
To: <Saugatsapkota463@gmail.com>



 18 attachments
  • Scanned by Gmail
<html>

<head>
    <title>Bala Hairscuts</title>
    <style>
        body {
            background-image: url('pic/last.jpg');
        }

        h2 {
            background-color: #d4af37;
        }

        a:link {
            color: black;
            background-color: transparent;
            text-decoration: none;
        }
        .container {
  position: relative;
  width: 30%;
  top: -67%;
  left: 35%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
  opacity: 0.3;
  top: 80%;
  left: 50%;
}

.container:hover .middle {
  opacity: 1;
  top: 80%;
  left: 50%;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
       
        .hero-image {
  background: url(haircut.webp) no-repeat center; 
  background-size: cover;
 background-position:center;
  height: 400px;
  width: 600px;
  position: absolute;
  position: absolute;
            top: 150%;
            left: 50%;
            transform: translate(-50%, -50%);
  
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 35%;
  transform: translate(-50%, -50%);
  color: white;}
  h5 {
            position: absolute;
            top: -110%;
            left: 190%;
            transform: translate(-50%, -50%);}
    </style>
</head>

<body>
  <h1 align=center>
    <img src="rlogo.png" alt="Sorry its coming..." height="250" width="500">
</h1>
<h2>
    <nav align=center>
        <div>
            <a href="barber.html">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;<a
                href="product.html">Products</a>&nbsp;&nbsp;&nbsp;&nbsp;<a
                href="service.html">Services</a>&nbsp;&nbsp;&nbsp;&nbsp;<a
                href="contact.html">Contact</a>
            &nbsp;&nbsp;&nbsp;&nbsp;<a href="aboutus.html">About us</a>
           
            &nbsp;&nbsp;&nbsp;&nbsp;<a href="appointment.html">Appointment</a>
            &nbsp;&nbsp;&nbsp;&nbsp;<a href="signup.html">Sign up</a>
        </div>
    </nav>
</h2>
    
    <h3>
        <table border=2 width=350 height=400>
            <img src="back.jpg" alt="its coming..." width=350 height=400>
        </table>
        
    </h3>
    <div class="container">
        <img src="pic/mine.jpg" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
          <div class="text">Sumit</div>
        </div>
      </div>
      <h4> 
        <div class="hero-image" align="center">
            <div class="hero-text">
              <h1 style="font-size:30px">Bala?</h1>
              <h3>Bala means good in newari language of newars which is one of the caste from Nepal. As a barber I want to give good services
                to the peoples make them looks good. Do haircuts as they desired.he objective of a barber is to ensure the client is 
                satisfied with the services performed,
                 as the ultimate goal is to build a clientele of repeat customers, as well as new customers through customer referrals.
              </h3>
              <h5> <img src="gif/giphy.gif" alt="its coming..." width=350 height=400></h5>
            </div>
          </div>
      </h4>
</body>

</html>
aboutus.html
Displaying aboutus.html.