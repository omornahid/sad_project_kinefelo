 <?php

include 'conn.php';

if(isset($_POST['done'])){

 $item_id= $_POST['item_id'];
 $name= $_POST['name'];
  $description = $_POST['description'];
 $price = $_POST['price'];
 $cat_id = $_POST['cat_id'];
 


  $filename = $_FILES["image"]["name"];   
  $tempname = $_FILES["image"]["tmp_name"];    
  $extension = pathinfo($filename, PATHINFO_EXTENSION);

  $folder = "images/".$cat_id."_".$item_id.".".$extension;
  if (move_uploaded_file($tempname, $folder))  {
    $msg = "Image uploaded successfully";
}else{
    $msg = "Failed to upload image";
}



 $rating = $_POST['rating'];
 $q = "INSERT INTO `products`(`item_id`, `name`, `description`, `price`, `image`, `cat_id`, `rating`) VALUES ('$item_id',' $name',' $description',' $price ','$folder',' $cat_id','$rating ')";

 $query = mysqli_query($con,$q);

 echo "<script>alert('New product added successfully! :)');</script>";

 echo "<script>window.location.assign('display.php');</script>";

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
<input class="btn-primary btn-lg" style="float: left;" type="button" value="Back" onclick="history.back()">
 <div class="col-lg-6 m-auto">
 <br><br><div class="card">
 
 <form method="post" enctype="multipart/form-data">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>

 <label> Item Id: </label>
 <input type="text" name="item_id" class="form-control"> <br>

 <label> Name: </label>
 <input type="text" name="name" class="form-control"> <br>

  <label> Description: </label>
 <input type="text" name="description" class="form-control"> <br>

 <label> Price: </label>
 <input type="text" name="price" class="form-control"> <br>

  <label> Image: </label>
  <input type="file" name="image" id="image">

 <label> Cat Id: </label>
 <input type="text" name="cat_id" class="form-control"> <br>

<label> Rating: </label>
 <input type="text" name="rating" class="form-control"> <br>


 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>