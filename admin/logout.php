<?php


session_start();

session_destroy();

echo"Logout Successfull";
header('Location: index.php');


?>