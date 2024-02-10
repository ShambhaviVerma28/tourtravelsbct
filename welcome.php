<?php

session_start();
echo"Welcome! ".$_SESSION['user_name'];
?>
<a href="logout.php">logout</a>