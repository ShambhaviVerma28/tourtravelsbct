<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour and Travels || Website</title>
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
            <button type="button"><a href="login_register.php">LOGIN</a></button>
            <button type="button" ><a href="login_register.php">REGISTER</a></button>
            <button type="button" ><a href="admin\index.php">ADMIN LOGIN</a></button>
        </div>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/scenery.jpg)" no-repeat>
                    <div class="content">
                        <span>Embark on Your Next Adventure </span><br>
                        <h3>Where Every Journey Begins!</h3>
                        <a href="package.php" class="btn">Discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/mountain.jpg)" no-repeat>
                    <div class="content">
                        <span>Embark on Your Next Adventure </span><br>
                        <h3>Where Every Journey Begins!</h3>
                        <a href="package.php" class="btn">Discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/desert.jpg)" no-repeat>
                    <div class="content">
                        <span>Embark on Your Next Adventure </span><br>
                        <h3>Where Every Journey Begins!</h3>
                        <a href="package.php" class="btn">Discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>


    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/alps.png" alt="Adventure">
                <h3>Adventure</h3>
            </div>
            <div class="box">
                <img src="images/tour-guide.png" alt="Tour guide">
                <h3>Tour guide</h3>
            </div>
            <div class="box">
                <img src="images/mountaineer.png" alt="Trekking">
                <h3>Trekking</h3>
            </div>
            <div class="box">
                <img src="images/camping.png" alt="Camp Fire">
                <h3>Camp Fire</h3>
            </div>
            <div class="box">
                <img src="images/road.png" alt="Off Road">
                <h3>Off road</h3>
            </div>
        </div>
    </section>

    <section class="home-about">
        <div class="image">
            <img src="images/about.jpg" alt="">
        </div>
        <div class="content">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem rem officia at aliquid, inventore eaque sed perspiciatis atque exercitationem ipsum. Dicta odit iure velit perferendis libero eaque, saepe tempore debitis repudiandae aspernatur hic, fugiat quaerat obcaecati earum nemo vitae inventore quisquam. Ut provident cumque voluptate deserunt repellat ullam, quam eum?</p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>

    <section class="home-package">
        <h1 class="heading-title">Our Packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/taj-mahal.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure and tour</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis nam, tenetur tempore veniam dignissimos suscipit voluptatibus! At magni possimus perferendis.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/sunset.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure and tour</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis nam, tenetur tempore veniam dignissimos suscipit voluptatibus! At magni possimus perferendis.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/temple.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure and tour</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis nam, tenetur tempore veniam dignissimos suscipit voluptatibus! At magni possimus perferendis.</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>
        <div class="load-more">
            <a href="package.php" class="btn">Load More</a>
        </div>
    </section>

    <section class="home-offer">
        <div class="content">
            <h3>Upto 50% Off</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, reprehenderit architecto ea ut incidunt tenetur saepe ducimus labore minima aliquam debitis? Vitae fuga quaerat facilis!</p>
            <a href="book.php" class="btn">Book now</a>
        </div>
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

















<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>