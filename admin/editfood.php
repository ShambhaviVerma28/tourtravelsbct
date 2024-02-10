<?php

include 'include/header.php';
include 'include/sidebar.php';
include 'include/top-right.php';
?>


<?php  

include 'sql/config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM add_package WHERE id = '$id'";
$table = mysqli_query($connection , $sql);
$row = mysqli_fetch_array($table);


?>


<div class="container-fluid">
	<div class="row mt-5 card-area">
		
		<div class="col-12">
			<div class="row">
				<div class="col-12">
					<div class="col-12 mt-3">
						<div style="float: right;">
							<a href="foodview.php" class="btn btn-primary">View All Food Item</a>
						</div>
					</div>
				</div>
			</div>
			<form action="sql/updatefood.php" method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="col-12">
						<h3 class="text-center pt-2">Add Package</h3><hr>
					</div>
				</div>
				<div class="row detaiils">
					<div class="col-md-4 col-sm-12">
						<label>Source</label>
						<input type="text" name="source" placeholder="Enter Food Name" class="form-control"  value="<?php echo $row['source'];?>">
					</div>
					<div class="col-md-4 col-sm-12">
						<label>Price</label>
						<input type="number" name="price" placeholder="Enter Number" required class="form-control" value="<?php echo $row['price'];?>">
					</div>
					<div class="col-md-4 col-sm-12">
						<label>No. Of Passengers</label>
						<input type="number" name="no_of_pass" placeholder="Enter Number of Passengers" required class="form-control" value="<?php echo $row['pass'];?>">
					</div>

				</div>
				<div class="row detaiils mt-4">
					<div class="col-md-4 col-sm-12">
						<label>Destination</label>
						<input type="text" name="destination" placeholder="Enter Discount Price" class="form-control" value="<?php echo $row['dest'];?>">
					</div>
					<div class="col-md-4 col-sm-12">
						<label>From</label>
						<input type="text" name="descrip" placeholder="Enter Description" required class="form-control" value="<?php echo $row['fromDate'];?>">
					</div>
					<div class="col-md-4 col-sm-12">
						<label>To</label>
						<input type="text" name="to" placeholder="Enter Description" required class="form-control" value="<?php echo $row['toDate'];?>">
					</div>

					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

				</div>
				<div class="row mt-4">
					<div class="col-md-4 col-sm-12">
						<input type="submit" name="update" value="Update Now" class="btn btn-primary">
					</div>
				</div>

			</form>
		</div>
	</div>
</div>




<?php

include 'include/footer.php';

?>

<style>
	.card-area{
		height: 500px;
		background-color: #fff;
	}
	form input[type="text"]{
		width: 100%!important;
		margin-top: -0px!important;
		border-radius: 0px!important;
	}
	form input[type="number"]{
		border-radius: 0px!important;
	}
	form select{
		border-radius: 0px!important;
	}
	
</style>