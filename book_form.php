<?php

include('connection.php');

    if(isset($_POST['send'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $address= $_POST['address'];
        $destination= $_POST['destination'];
        $guests= $_POST['guests'];
        $arrivals= $_POST['arrivals'];
        $leaving= $_POST['leaving'];

        $request = " insert into book_form(name, email,	phone,	address, destination, guests, arrival, leaving) values ('$name', '$email', '$phone', '$address', '$destination', '$guests', '$arrivals','$leaving')";

        mysqli_query($connection, $request);

        header('location:book.php');
    }
    else{
        echo'Something went wrong. Try again!';
    }