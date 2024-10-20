<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';

    $username = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM signup WHERE email = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            header('Location: ../home.php');
        } else {
            echo "Invalid password";
        }
    } else {
        echo "No user found";
    }
    $conn->close();
}
?>

