<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}
include 'db.php';

// Display all user bookings
$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);
?>

<h1>Admin Panel - Bookings Overview</h1>
<ul>
    <?php while ($row = $result->fetch_assoc()) : ?>
        <li><?= $row['user_id'] ?> booked <?= $row['transport_type'] ?> to <?= $row['destination'] ?>.</li>
    <?php endwhile; ?>
</ul>
