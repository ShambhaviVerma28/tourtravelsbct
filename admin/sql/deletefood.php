<?php

include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM add_package WHERE id = '$id'";

if(mysqli_query($connection , $sql)){
		echo "<script>
				alert('Data Delete Successfully');
				window.location = 'http://localhost/Shambhavi/tourtravels/admin/foodview.php';
		</script>";
	}else{
		echo "error" .mysqli_error($connection);
	}

?>