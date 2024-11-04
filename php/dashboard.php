<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
include 'db.php';

$user_id = $_SESSION['user_id'];

// Fetch user bookings
$sql = "SELECT * FROM bookings WHERE user_id = '$user_id'";
$result = $conn->query($sql);
?>

<h1>Your Dashboard</h1>
<ul>
    <?php while ($row = $result->fetch_assoc()) : ?>
        <li>
            Booking ID: <?= $row['id'] ?> - <?= $row['transport_type'] ?> to <?= $row['destination'] ?>
            on <?= $row['date'] ?>
        </li>
    <?php endwhile; ?>
</ul>

<a href="book.php">Make a new booking</a>
