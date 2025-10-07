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


    <p align="center">
        <font color="black">Our aim is to provide you good service and also provide the quality products.</font>
    </p>
</body>
</html>

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
            color: rgb(251, 251, 251);
            background-color: transparent;
            text-decoration: none;
        }

        h4 {
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-size: 20px;
            color: #ffffff;
        }
        h5 {
            font-size: 20px;
            color: #ffffff  ;

        }
        .contact {
            text-align: center;
            color: rgb(255, 255, 255);
            font-size: 20px;
        }

        form {
            display: inline-block;
            text-align: center;
            color: aliceblue;
        }
        .cat{
    display: flex;
    gap:50px;
    grid-template-columns:auto auto;
    color: #ffffff;
    padding: 30px 20px;
    /* grid-column-gap: 20px; */
    /* grid-row-gap:30px; */

}
.cat1{
    border: 1px ;
    padding: 20px;
    font-size:30;
    text-align:center;
    color: #ffffff;
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
            <img src="C:\Users\61406\Desktop\Barber\back.jpg" alt="its coming..." width=350 height=400>
        </table>
        <h4><b>Opening Hours</b>
            
        <ul>
            <li>Sunday(10am-7pm)</li><li>Monday(10am-7pm)</li><li>Tuesday(10am-7pm)</li><li>Wednesday(10am-7pm)</li><li>Thursday(10am-7pm)</li><li>Friday(10am-7pm)</li><li>Saturday(10am-7pm)</li>
        </ul><a href="C:\Users\61406\Desktop\Barber\appointment.html"><button >Appointment</button></a></h4>
    </h3>
    <h5 align="center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3257.113883332578!2d149.12589084079704!3d-35.278294693551196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b164d680b663907%3A0x95a50cffbec97392!2sAlinga%20St%2C%20Canberra%20ACT%202601!5e0!3m2!1sen!2sau!4v1696327670754!5m2!1sen!2sau" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<br><br><b>  <u>Our Location</u></b>
<ul>
    <li>Contact = 047800000</li>
    <l1>Address = Alinga street</l1>
    <li>Email = <a  href="twenty8@email.com">Bala.haircuts@email.com</a></li>
    
</ul>
<br><br>
<b>!!!THANKYOU!!!</b>
</h5>
    
</body>

</html>
