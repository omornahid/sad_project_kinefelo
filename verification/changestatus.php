 <?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $order_id= $_POST['order_id'];
 $status= $_POST['status'];

 $q = "UPDATE `order` SET `status`='$status' WHERE `order_id`=$id";

 $query = mysqli_query($con,$q);

 header('location:display.php');
 }

?>
<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Change Status Operation </h1>
 </div><br>

 <label> New Status: </label>
 <input type="text" name="status" class="form-control"> <br>




 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
 

 </div>
 </form>
 </div>
</body>
</html>
