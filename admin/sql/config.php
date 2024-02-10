<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'book_db';

$connection = mysqli_connect($hostname, $username, $password ,$dbname);

if(!$connection){
	echo "error" .mysqli_error($connection);
}

?>