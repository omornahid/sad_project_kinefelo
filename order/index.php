<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/order.css">
</head>
<body>
	<div class="container">
		<form action="php/create.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Create</h4><hr><br>
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
		           value="<?php if(isset($_GET['date']))
		                           echo($_GET['date']); ?>" >
		   </div>
            
            
            <div class="form-group">
		     <label for="address">Address</label>
		     <input type="address" 
		           class="form-control" 
		           id="address" 
		           name="address" 
		           value="<?php if(isset($_GET['address']))
		                           echo($_GET['address']); ?>" 
		           placeholder="Enter address">
		   </div>
            
            <div class="form-group">
		     <label for="status">Status</label>
		     <input type="status" 
		           class="form-control" 
		           id="status" 
		           name="status" 
		           value="<?php if(isset($_GET['status']))
		                           echo($_GET['status']); ?>" 
		           placeholder="Enter status">
		   </div>


		   <div class="form-group">
		     <label for="email">Email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?php if(isset($_GET['email']))
		                           echo($_GET['email']); ?>"
		           placeholder="Enter email">
		   </div>
            
            
            <div class="form-group">
		     <label for="transaction">Transaction ID</label>
		     <input type="transaction" 
		           class="form-control" 
		           id="transaction" 
		           name="transaction" 
		           value="<?php if(isset($_GET['transaction']))
		                           echo($_GET['transaction']); ?>" 
		           placeholder="Enter transaction id">
		   </div>

            <div>
                <button type="submit" 
		          class="btn btn-primary"
		          name="create">Create</button>
                <button onclick="location.href='read.php'" type="button" class="btn btn-success">
                View</button>
            </div>
            
	    </form>
             
	</div>
</body>
</html>