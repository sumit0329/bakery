<?php
// About Us page for Twenty 8 Bakery
?>
<!DOCTYPE html>
<html>
<head>
    <title>About Us | Twenty 8 Bakery</title>
    <style>
        body {
            margin: 0;
            font-family: 'Georgia', serif;
            background-image: url('images/back2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .header {
            padding: 20px;
            text-align: center;
            background-image: url('images/back4.jpg');
            background-size: 40% 100%;
            color: black;
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

        .about-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            padding: 60px 20px;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .about-img {
            width: 400px;
            border-radius: 10px;
            margin: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        .about-text {
            max-width: 600px;
            margin: 20px;
            background: #fff8f5;
            padding: 30px;
            border-radius:
        }