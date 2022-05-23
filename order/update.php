<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/order.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
            
		   <div class="form-group">
		     <label for="date">Date</label>
		     <input type="date" 
		           class="form-control" 
		           id="date" 
		           name="date" 
		           value="<?=date('Y-m-d',strtotime($row['order_date'])) ?>" >
		   </div>
            
            
            <div class="form-group">
		     <label for="address">Address</label>
		     <input type="address" 
		           class="form-control" 
		           id="address" 
		           name="address" 
		           value="<?=$row['order_address'] ?>" >
		   </div>
            
            <div class="form-group">
		     <label for="status">Status</label>
		     <input type="status" 
		           class="form-control" 
		           id="status" 
		           name="status" 
		           value="<?=$row['status'] ?>" >
		   </div>


		   <div class="form-group">
		     <label for="email">Email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?=$row['customer_email'] ?>" >
		   </div>
            
            
            <div class="form-group">
		     <label for="transaction">Transaction ID</label>
		     <input type="transaction" 
		           class="form-control" 
		           id="transaction" 
		           name="transaction" 
		           value="<?=$row['transactionID'] ?>" > 
		   </div>
            
		   <input type="text" 
		          name="id"
		          value="<?=$row['order_id']?>"
		          hidden >
           <div>
               <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
		    <button onclick="location.href='read.php'" type="button" class="btn btn-success">
                View</button>
            </div>
		   
	    </form>
	</div>
</body>
</html>