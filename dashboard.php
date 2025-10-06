<?php
session_start();
if(!isset($_SESSION["user"])) header("Location: login.php");
?>

 


<html>
<head>
<style>
body  {
  background-image: url("images/back2.jpg");
h3 {
            background-color: #d4af37;
            font-size: 30px;
            color: white;
            padding: 15px;
        }

}
</style>
</head>
<body>


 <div class="header">
  <h1 align=center>
        <img src="images/lastlogo.jpg" alt="Sorry its coming..." height="250" width="300">
    </h1>
  
</div>
<h2>Welcome to our family <?php echo $_SESSION["user"]; ?></h2><h3 align=center><div>
<a href="dashboard.php">Home</a>|
            <a href="view_product.php">product</a> |
            <a href="contactus.php">Contact Us</a> |
            <a href="aboutus.php">About Us</a> |
            <a href="login.php">Login</a></div></h3>
</body>
</html>