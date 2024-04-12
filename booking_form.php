<?php
    $connection = mysqli_connect('localhost', 'root','', 'book_db');
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location_1  = $_POST['location_1'];
        $location  = $_POST['location'];
        $guests = $_POST[ 'guests'];
        $arrivals = $_POST['arrivals'];
        $departure = $_POST['departures'];

        $request = "insert into book_form(name, email, phone, address, location_1, location, guests, arrivals, departures) values ('$name', '$email', '$phone', '$address', '$location_1', '$location','$guests', '$arrivals', '$departure')";
        mysqli_query($connection, $request);
        header('location:book.php');
    }else{
        echo 'something went wrong, Try again';
    }
?>