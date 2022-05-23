<?php include "php/read.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div>
		<input class="btn-primary btn-lg" style="float: right;" type="button" value="Back" onclick="history.back()">
			<h4 class="display-4 text-center">Read</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			
			<?php if (mysqli_num_rows($result) > 0) { ?>
			<table class="table table-bordered">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">#</th>
                  <th scope="col">Date</th>
                  <th scope="col">Address</th>
                  <th scope="col">Status</th>
                  <th scope="col">Email</th>
				  <th scope="col">Name</th>

                  <th scope="col">Transaction ID</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?php echo $i; ?></th>
                  <td><?php echo $rows['order_date']; ?></td>
                  <td><?php echo $rows['order_address']; ?></td>
                  <td><?php echo $rows['status']; ?></td>
                  <td><?php echo $rows['customer_email']; ?></td>
				  <td><?php echo $rows['name']; ?></td>

                  <td><?php echo $rows['transactionID']; ?></td>
                    
			      <td><a href="update.php?id=<?=$rows['order_id']?>" 
			      	     class="btn btn-success">Update</a>

			      	  <a href="php/delete.php?id=<?=$rows['order_id']?>" 
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
            <div align="center">
                <button onclick="location.href='index.php'" type="button" class="btn btn-primary">
                Create</button>
            </div>
		</div>
	</div>
</body>
</html>