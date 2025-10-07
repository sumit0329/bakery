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