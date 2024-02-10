<?php

if(isset($_POST['update'])){

	include 'config.php';

	$id=$_POST['id'];
	$source = $_POST['source'];
	$price = $_POST['price'];
	$no_of_pass = $_POST['no_of_pass'];
	$destination = $_POST['destination'];
	$from = $_POST['from'];
	$to = $_POST['to'];


	$sql = "UPDATE add_package SET source= '$source', price= '$price', pass= '$no_of_pass', dest= '$destination', fromDate= '$from', toDate= '$to' WHERE id = '$id'";

	if(mysqli_query($connection, $sql)){
		echo "<script>
				alert ('Update Successfull');
				window.location.href ='../foodview.php'
		</script>";
	}else{
		echo "error" .mysqli_error($connection);
	}
}



?>