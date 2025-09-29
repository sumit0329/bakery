
<html>

<head>
    <title>Twenty 8 Bakery </title>
    <style>
        body {
            background-image: url('images/back2.jpg');
        }

        h2 {
            background-color: #d4af37;
            animation-name: example2;
  animation-duration: 3s;
  animation-iteration-count: 20;
        }

        a:link {
            color: black;
            background-color: transparent;
            text-decoration: none;
        }
div.gallery {
  border: 1px solid #ccc;
  background-color: #d4af37;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 50%;
}

div.desc {
  padding: 5px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 25%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 10%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
h3{
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
        h4{
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
        }
        p {
            position: absolute;
            top: 670%;
            left: 50%;
            transform: translate(-50%, 50%);

        }
    </style>
</head>

<body>
  <h1 align=center>
    <img src="rlogo.png" alt="Sorry its coming..." height="250" width="500">
</h1>
<h2>
    <nav align=center>
        <div>
            <a href="dashboard.php">Home</a>|
            <a href="product.php">product</a> |
            <a href="contactus.php">Contact Us</a> |
            <a href="aboutus.php">About Us</a> |
            <a href="login.php">Login</a>
            
        </div>
    </nav>
</h2><h3 align="center"><b>BARBER</b></h3>
    <div class="polaroid" align="center">
        <img src="pic/Demo.jpg" alt="5 Terre" style="width:100%">
        <div class="container">
       
        </div>
      </div>
      <h4 align="center">Products</h4>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/trim.jpg">
            <img src="pic/trim.jpg" alt="Comming" width="600" height="400">
          </a>
          <div class="desc"><b> Havels</b></div>
          <div class="desc"><b>$59.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/trim2.jpeg">
            <img src="pic/trim2.jpeg" alt="coming" width="600" height="400">
          </a>
          <div class="desc"><b>Deluxe Trimmer</b></div>
          <div class="desc"><b>$39.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/trim3.jpg">
            <img src="pic/trim3.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc"><b>RTR Trimmer</b></div>
          <div class="desc"><b>$129.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/trim4.png">
            <img src="pic/trim4.png" alt="Mountains" width="600" height="400">
          </a>
          <div class="desc"><b>GXT Trimmer</b></div>
          <div class="desc"><b>$139.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
     
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/sc1.webp">
            <img src="pic/sc1.webp" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc"><b>SG Scissors</b></div>
          <div class="desc"><b>$29.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/sc2.jpg">
            <img src="pic/sc2.jpg" alt="Mountains" width="500" height="300">
          </a>
          <div class="desc"><b>GXT goldd</b></div>
          <div class="desc"><b>$139.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/shave1.jpg">
            <img src="pic/shave1.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc"><b>Rachu</b></div>
          <div class="desc"><b>$129.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/shave2.webp">
            <img src="pic/shave2.webp" alt="Mountains" width="600" height="400">
          </a>
          <div class="desc"><b>G-Shaver</b></div>
          <div class="desc"><b>$109.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/shave3.jpeg">
            <img src="pic/shave3.jpeg" alt="Mountains" width="600" height="400">
          </a>
          <div class="desc"><b>G3-Shaver</b></div>
          <div class="desc"><b>$139.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/clip1.jpg">
            <img src="pic/clip1.jpg" alt="Mountains" width="600" height="400">
          </a>
          <div class="desc"><b>B-Clipper</b></div>
          <div class="desc"><b>$139.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/clip2.jpg">
            <img src="pic/clip2.jpg" alt="Mountains" width="600" height="400">
          </a>
          <div class="desc"><b>GXT ck</b></div>
          <div class="desc"><b>$139.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/clip3.webp">
            <img src="pic/clip3.webp" alt="Mountains" width="600" height="400">
          </a>
          <div class="desc"><b>ck</b></div>
          <div class="desc"><b>$166.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/clip4.jpg">
            <img src="pic/clip4.jpg" alt="Mountains" width="600" height="400">
          </a>
          <div class="desc"><b>MK-AURTHER</b></div>
          <div class="desc"><b>$229.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/clip5.webp">
            <img src="pic/clip5.webp" alt="Mountains" width="600" height="400">
          </a>
          <div class="desc"><b>SlS M</b></div>
          <div class="desc"><b>$339.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/wahl.png">
            <img src="pic/wahl.png" alt="Mountains" width="600" height="400">
          </a>
          <div class="desc"><b>Wahl</b></div>
          <div class="desc"><b>$39.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/wahl1.jpg">
            <img src="pic/wahl1.jpg" alt="Mountains" width="600" height="400">
          </a>
          <div class="desc"><b>wahl M</b></div>
          <div class="desc"><b>$29.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/mega1.webp">
            <img src="pic/mega1.webp" alt="Mountains" width="600" height="400">
          </a>
          <div class="desc"><b>M-Dryer</b></div>
          <div class="desc"><b>$39.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/hr2.jpeg">
            <img src="pic/hr2.jpeg" alt="Mountains" width="600" height="400">
          </a>
          <div class="desc"><b>Hair Spray</b></div>
          <div class="desc"><b>$9.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="pic/hr.jpeg">
            <img src="pic/hr.jpeg" alt="Mountains" width="600" height="400">
          </a>
          <div class="desc"><b>HR SP</b></div>
          <div class="desc"><b>$11.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      
      <div class="clearfix"></div>
      
      <p align="center">
        <font color="black">Our aim is to provide you good service and also provide the quality products.</font>
    </p>

  
</body>

</html>