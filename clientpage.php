<?php 
   session_start();
   session_destroy();
   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
   }

   ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronics Company</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 20px;
        }

        nav {
            overflow: hidden;
            background-color: #34495e;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: padding 0.3s;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #2c3e50;
        }

        section {
            padding: 40px;
            text-align: center;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
        }

        footer a {
            color: #ecf0f1;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <h1>Electronics Company</h1>
    </header>


    <nav id="navbar">
        <a href="#about">About Us</a>
        <a href="#products">Our Products</a>
        <a href="#services">Our Services</a>
        <a href="#contact">Contact</a>
        <a href="php/logout.php">Log Out</a>
    </nav>

    <section id="about">
        <h2>About Us</h2>
        <p>Welcome to our electronics company. We specialize in providing high-quality electronic products and services for your home.</p>
    </section>

    <section id="products">
        <h2>Our Products</h2>
        <p>Explore our range of cutting-edge electronic products designed to enhance your lifestyle.</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <p>We offer comprehensive services for installing and maintaining electronic systems in homes. From smart home setups to security systems, we've got you covered.</p>
    </section>

    <footer>
        <p>Follow us on social media: <a href="#" target="_blank">Facebook</a> | <a href="#" target="_blank">Twitter</a> | <a href="#" target="_blank">Instagram</a></p>
    </footer>

</body>
</html>
