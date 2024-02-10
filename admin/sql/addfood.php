<?php

if(isset($_POST['submit'])){

	include 'config.php';


	$source = $_POST['source'];
	$price = $_POST['price'];
	$no_of_pass = $_POST['no_of_pass'];
	$destination = $_POST['destination'];
	$from = $_POST['from'];
	$to = $_POST['to'];


	$sql = "INSERT INTO add_package(source,price,pass,dest,	fromDate,toDate)VALUES('$source','$price','$no_of_pass', '$destination', '$from', '$to')";

	if(mysqli_query($connection, $sql)){
		echo "<script>
				alert('Package Added Successfully');
				window.location.href ='../food.php'
		</script>";
	}
}else{
		echo "error" .mysqli_error($connection);
	}








?>