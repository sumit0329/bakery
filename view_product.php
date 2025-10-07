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

    <h4 align="center">Our Products</h4>

    <!-- Product List -->
    <?php
    // Example: You can fetch products from a database and loop through them here.
    // For now, static HTML is used.
    ?>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/pro1.jpg">
                <img src="images/pro1.jpg" alt="High Fibre White Loaf Bread">
            </a>
            <div class="desc"><b>High Fibre White Loaf Bread</b></div>
            <div class="desc"><b>$5.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/pro2.jpg">
                <img src="images/pro2.jpg" alt="White Block Loaf Bread">
            </a>
            <div class="desc"><b>White Block Loaf Bread</b></div>
            <div class="desc"><b>$3.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/pro3.jpg">
                <img src="images/pro3.jpg" alt="Round White Roll">
            </a>
            <div class="desc"><b>Round White Roll</b></div>
            <div class="desc"><b>$1.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/pro4.jpg">
                <img src="images/pro4.jpg" alt="White Vienna">
            </a>
            <div class="desc"><b>White Vienna</b></div>
            <div class="desc"><b>$4.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/pro5.jpg">
                <img src="images/pro5.jpg" alt="Traditional Hot Cross Bun 6 Pack">
            </a>
            <div class="desc"><b>Traditional Hot Cross Bun 6 Pack</b></div>
            <div class="desc"><b>$6.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/pro6.jpg">
                <img src="images/pro6.jpg" alt="Mocha Hot Cross Bun">
            </a>
            <div class="desc"><b>Mocha Hot Cross Bun</b></div>
            <div class="desc"><b>$3.5</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/pro7.jpg">
                <img src="images/pro7.jpg" alt="Lemon Tart 6 Pack">
            </a>
            <div class="desc"><b>Lemon Tart 6 Pack</b></div>
            <div class="desc"><b>$8.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/pro8.jpg">
                <img src="images/pro8.jpg" alt="Large Traditional Christmas Cake">
            </a>
            <div class="desc"><b>Large Traditional Christmas Cake</b></div>
            <div class="desc"><b>$10.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/pro9.jpg">
                <img src="images/pro9.jpg" alt="Ham & Cheese Danish">
            </a>
            <div class="desc"><b>Ham & Cheese Danish</b></div>
            <div class="desc"><b>$3.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/pro10.jpg">
                <img src="images/pro10.jpg" alt="Croissant">
            </a>
            <div class="desc"><b>Croissant</b></div>
            <div class="desc"><b>$3.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/pro11.jpg">
                <img src="images/pro11.jpg" alt="Cheese & Bacon Roll">
            </a>
            <div class="desc"><b>Cheese & Bacon Roll</b></div>
            <div class="desc"><b>$3.5</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/pro12.jpg">
                <img src="images/pro12.jpg" alt="Italian Roll">
            </a>
            <div class="desc"><b>Italian Roll</b></div>
            <div class="desc"><b>$4.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/pro13.jpg">
                <img src="images/pro13.jpg" alt="Croissant 4 Pack">
            </a>
            <div class="desc"><b>Croissant 4 Pack</b></div>
            <div class="desc"><b>$12.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/pro14.jpg">
                <img src="images/pro14.jpg" alt="Savoury Bite 3 Pack">
            </a>
            <div class="desc"><b>Savoury Bite 3 Pack</b></div>
            <div class="desc"><b>$9.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/pro15.jpg">
                <img src="images/pro15.jpg" alt="Scones 6 Pack">
            </a>
            <div class="desc"><b>Scones 6 Pack</b></div>
            <div class="desc"><b>$8.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="images/pro16.jpg">
                <img src="images/pro16.jpg" alt="Pizza 2 Pack">
            </a>
            <div class="desc"><b>Pizza 2 Pack</b></div>
            <div class="desc"><b>$9.95</b></div>
            <div class="desc"><button>BUY</button></div>
        </div>
    </div>

    <div class="clearfix"></div>

    <p align="center">
        <font color="black">Our aim is to provide you good service and also provide the quality products.</font>
    </p>
</body>
</html>