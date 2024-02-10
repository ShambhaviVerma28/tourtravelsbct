<?php

include 'include/header.php';
include 'include/sidebar.php';
include 'include/top-right.php';
?>

<div class="container-fluid">
	<div class="row mt-5 card-area">
		<div class="col-12 m-0 p-0">
			
            <div class="card">

                <div class="card-body">

                    <table class="table table-bordered table-hover table table-responsive"  id="table_id">
                        <thead>
                            <tr>
                                <th data-priority="1">Sno.</th>
                                <th>Source</th>
                                <th>Price</th>
                                <th>No. Of Passengers</th>
                                <th data-priority="2">Destination</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        	<?php

                        	include 'sql/config.php';

                        	$sql = "SELECT * FROM add_package";
                        	$table = mysqli_query($connection , $sql);
                        	$i = 1;

                        	if(mysqli_num_rows($table)>0){
                        		while($row = mysqli_fetch_array($table)){
                        			?>
                        	
                        			 <tr>
		                                <td><?php echo $row['id'];?></td>
		                                <td><?php echo $row['source']?></td>
		                                <td><?php echo $row['price'];?></td>
		                                <td><?php echo $row['pass'];?></td>
		                                <td><?php echo $row['dest'];?></td>
		                                <td><?php echo $row['fromDate'];?></td>
										<td><?php echo $row['toDate'];?></td>

		                                <td>
		                                	<a href="sql/deletefood.php?id=<?php echo $row['id'];?>"> <img src="img/delete.png" alt="..." height="20px" width="20px" class="mt-1"></a> 

		                                	<a href="editfood.php?id=<?php echo $row['id'];?>"><img src="img/edit.png" alt="..." height="20px" width="20px" class="mr-3 mt-1"></a>
		                                </td>
		                            </tr>

		                            <?php
		                            $i++;

                        		}
                        	}
                        	?>

                        </tbody>
                    </table>

                </div>

            </div>
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
</style>