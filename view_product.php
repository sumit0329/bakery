<?php
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
            background-color: #ddd;
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
        <a href="view_product.php"class="active">Product</a>
        <a href="contactus.php">Contact Us</a>
        <a href="aboutus.php">About Us</a>
        <a href="login.php">Login</a>
            </nav>
        </h2>
    </div>

    <h4>Our Products</h4>

    
    <div class="product-container">

        <div class="gallery">
            <a target="_blank" href="images/pro1.jpg">
                <img src="images/pro1.jpg" alt="High Fibre White Loaf Bread">
            </a>
            <div class="desc"><b>High Fibre White Loaf Bread</b></div>
            <div class="desc"><b>$5.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/pro2.jpg">
                <img src="images/pro2.jpg" alt="White Block Loaf Bread">
            </a>
            <div class="desc"><b>White Block Loaf Bread</b></div>
            <div class="desc"><b>$3.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/pro3.jpg">
                <img src="images/pro3.jpg" alt="Round White Roll">
            </a>
            <div class="desc"><b>Round White Roll</b></div>
            <div class="desc"><b>$1.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/pro4.jpg">
                <img src="images/pro4.jpg" alt="White Vienna">
            </a>
            <div class="desc"><b>White Vienna</b></div>
            <div class="desc"><b>$4.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/pro5.jpg">
                <img src="images/pro5.jpg" alt="Traditional Hot Cross Bun 6 Pack">
            </a>
            <div class="desc"><b>Traditional Hot Cross Bun 6 Pack</b></div>
            <div class="desc"><b>$6.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/pro6.jpg">
                <img src="images/pro6.jpg" alt="Mocha Hot Cross Bun">
            </a>
            <div class="desc"><b>Mocha Hot Cross Bun</b></div>
            <div class="desc"><b>$3.50</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/pro7.jpg">
                <img src="images/pro7.jpg" alt="Lemon Tart 6 Pack">
            </a>
            <div class="desc"><b>Lemon Tart 6 Pack</b></div>
            <div class="desc"><b>$8.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/pro8.jpg">
                <img src="images/pro8.jpg" alt="Large Traditional Christmas Cake">
            </a>
            <div class="desc"><b>Large Traditional Christmas Cake</b></div>
            <div class="desc"><b>$10.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/pro9.jpg">
                <img src="images/pro9.jpg" alt="Ham & Cheese Danish">
            </a>
            <div class="desc"><b>Ham & Cheese Danish</b></div>
            <div class="desc"><b>$3.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/pro10.jpg">
                <img src="images/pro10.jpg" alt="Croissant">
            </a>
            <div class="desc"><b>Croissant</b></div>
            <div class="desc"><b>$3.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/pro11.jpg">
                <img src="images/pro11.jpg" alt="Cheese & Bacon Roll">
            </a>
            <div class="desc"><b>Cheese & Bacon Roll</b></div>
            <div class="desc"><b>$3.50</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/pro12.jpg">
                <img src="images/pro12.jpg" alt="Italian Roll">
            </a>
            <div class="desc"><b>Italian Roll</b></div>
            <div class="desc"><b>$4.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/pro13.jpg">
                <img src="images/pro13.jpg" alt="Croissant 4 Pack">
            </a>
            <div class="desc"><b>Croissant 4 Pack</b></div>
            <div class="desc"><b>$12.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/pro14.jpg">
                <img src="images/pro14.jpg" alt="Savoury Bite 3 Pack">
            </a>
            <div class="desc"><b>Savoury Bite 3 Pack</b></div>
            <div class="desc"><b>$9.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/pro15.jpg">
                <img src="images/pro15.jpg" alt="Scones 6 Pack">
            </a>
            <div class="desc"><b>Scones 6 Pack</b></div>
            <div class="desc"><b>$8.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/pro16.jpg">
                <img src="images/pro16.jpg" alt="Pizza 2 Pack">
            </a>
            <div class="desc"><b>Pizza 2 Pack</b></div>
            <div class="desc"><b>$9.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>

    </div>

    <p><font color="black">Our aim is to provide you good service and quality products.</font></p>
</body>
</html>
