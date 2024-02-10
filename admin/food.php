<?php

include 'include/header.php';
include 'include/sidebar.php';
include 'include/top-right.php';
?>


<div class="container-fluid">
	<div class="row mt-5 card-area">
		
		<div class="col-12">
			<div class="row">
				<div class="col-12">
					<div class="col-12 mt-3">
						<div style="float: right;">
							<a href="foodview.php" class="btn btn-primary">View All packages</a>
						</div>
					</div>
				</div>
			</div>
			<form action="sql/addfood.php" method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="col-12">
						<h3 class="text-center pt-2">Add Package</h3><hr>
					</div>
				</div>
				<div class="row detaiils">
					<div class="col-md-4 col-sm-12">
						<label>Source</label>
						<input type="text" name="source" placeholder="Enter Source" class="form-control">
					</div>
					<div class="col-md-4 col-sm-12">
						<label>Price</label>
						<input type="number" name="price" required class="form-control">
					</div>
					<div class="col-md-4 col-sm-12">
						<label>No. Of Passengers</label>
						<input type="number" name="no_of_pass" placeholder="Enter Number of Passengers" required class="form-control">
						
					</div>

				</div>
				<div class="row detaiils mt-4">
					<div class="col-md-4 col-sm-12">
						<label>Destination</label>
						<input type="text" name="destination" placeholder="Enter Destination" class="form-control">
					</div>
					<div class="col-md-4 col-sm-12">
						<label>From</label>
						<input type="date" name="from" required class="form-control">
					</div>
					<div class="col-md-4 col-sm-12">
						<label>To</label>
						<input type="date" name="to" required="" class="form-control">
					</div>

				</div>
				<div class="row mt-4">
					<div class="col-md-4 col-sm-12">
						<input type="submit" name="submit" value="Add Package Details" class="btn btn-primary">
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