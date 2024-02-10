<?php
session_start();
    if(empty($_SESSION['login_admin'])){

        echo "<script>
            window.location = 'login_register.php'
          </script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour and Travels</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="header">
        <a href="home.php" class="logo">Voyage Verse</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Book now</a>
        </nav>
        <div class="sign-in-up">
            <button type="button">LOGIN</button>
            <button type="button">REGISTER</button>
        </div>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <div class="heading" style="background:url(images/heading.jpg)">
        <h1>Bookings</h1>
    </div>
    <!--Booking section-->
    <section class="booking">
        <h1 class="heading-title">Book your TRIP</h1>
        <form action="book_form.php" method="post" class="book_form">
            <div class="flex">
                <div class="inputBox">
                    <span>name:</span>
                    <input type="text" placeholder="Name" name="name">
                </div>
                
                <div class="inputBox">
                    <span>email:</span>
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone:</span>
                    <input type="number" placeholder="Phone No." name="phone">
                </div>
                <div class="inputBox">
                    <span>address:</span>
                    <input type="text" placeholder="address" name="address">
                </div>
                <div class="inputBox">
                    <span>Destination:</span>
                    <input type="text" placeholder="destination" name="destination">
                </div>
                <div class="inputBox">
                    <span>how many:</span>
                    <input type="number" placeholder="Number of people" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrival:</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving:</span>
                    <input type="date"  name="leaving">
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>

























    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Packages</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>

            <div class="box">
                <h3>Extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Question</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms of Use</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +91-9876543210</a>
                <a href="#"><i class="fas fa-envelope"></i> abc@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Kolkata, West Bengal</a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            </div>
        </div>
    </section>


















<script src="script.js"></script>
</body>
</html>