
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