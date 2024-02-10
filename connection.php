<?php

    $hostname ='localhost';
    $username = 'root';
    $password = '';
    $database = 'book_db';


    $connection = mysqli_connect($hostname, $username, $password, $database);

    if(!$connection){
        echo'error' .mysqli_error($connection);
    }