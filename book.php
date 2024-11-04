<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!--Header section starts here-->
<section class="header">
    <img src="images/logo.jpg" alt="">
    <a href="home.php" class="logo">Manzil</a>
    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!--Header section ends here-->
<!-- Booking section starts -->
<section class="booking">
    <h1 class="heading-title">Book Your Trip!</h1>
    <form action="booking_form.php" method="post" class="booking__form">
        <div class="flex">
            <div class="inputBox">
                <span>Name: </span>
                <input type="text" placeholder="Enter Your Name: " name="name">
            </div>
            <div class="inputBox">
                <span>Email: </span>
                <input type="email" placeholder="Enter Your Emai_id: " name="email">
            </div>
            <div class="inputBox">
                <span>Phone: </span>
                <input type="number" placeholder="Enter Your Phone Number: " name="phone">
            </div>
            <div class="inputBox">
                <span>Address: </span>
                <input type="text" placeholder="Enter Your Address: " name="address">
            </div>
            <div class="inputBox">
                <span>From: </span>
                <input type="text" placeholder="Place you are departing: " name="location_1">
            </div>
            <div class="inputBox">
                <span>Where to: </span>
                <input type="text" placeholder="Place you want to visit: " name="location">
            </div>
            <div class="inputBox">
                <span>How many: </span>
                <input type="number" placeholder="Number of travellers: " name="guests">
            </div>
            <div class="inputBox">
                <span>Arrival date: </span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>Departure date: </span>
                <input type="date" name="departures">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>
<!-- Booking section ends -->

<!--Footer section starts here-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>about us</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i>+123-123-1234</a>
            <a href="#"><i class="fas fa-envelope"></i>mitbduo@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>Bengaluru, India - 560064</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook"></i>facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
    </div>

    <div class="credit"> created by <span>Aaradhy Tiwari & Darpan Parkar</span> | the grind is real! </div>

</section>
<!--Footer section ends here-->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>