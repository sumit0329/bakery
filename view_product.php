
<html>

<head>
    <title>Twenty 8 Bakery </title>
    <style>
        .header {
  padding: 20px;
  text-align: center;
   background-image: url('images/back4.jpg');
     background-size: 40% 100%;
  color: black;
  font-size: 20px;
}
        body {
            background-image: url('images/back2.jpg');
        }

        

        a:link {
            color: black;
            background-color: transparent;
            text-decoration: none;
        }
.nav {
  background-color: salmon;
  overflow: hidden;
}

/* For styling the links inside the navigation bar */
.nav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* For Changing the color of links on hover */
.nav a:hover {
  background-color: #ddd;
  color: black;
}

/* For adding a color to the active/current link */
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
    <div class = "header">
         <h1 align=center>
    <img src="images/lastlogo.jpg" alt="Sorry its coming..." height="250" width="500">
</h1>
    </div>
 
<div class ="nav"> 
 <h2> 
        <nav align=center>
            <div>
            <a href="dashboard.php">Home</a>|
            <a href="view_product.php">product</a> |
            <a href="contactus.php">Contact Us</a> |
            <a href="aboutus.php">About Us</a> |
            <a href="login.php">Login</a>
        </nav>
    </h2>
</div>

      <h4 align="center">Our Products</h4>
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="images/pro1.jpg">
            <img src="images/pro1.jpg" alt="Comming" width="600" height="400">
          </a>
          <div class="desc"><b> High Fibre White Loaf Bread</b></div>
          <div class="desc"><b>$5.95</b></div> <div class="desc"><button>BUY</button></div>
        </div>
      </div>
      
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="images/pro2.jpg">
            <img src="images/pro2.jpg" alt="coming" width="600" height="400">
          </a>
          <div class="desc"><b>White Block Loaf Bread</b></div>
          <div class="desc"><b>$3.95</b></div> <div class="desc"><button>BUY</button></div>
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