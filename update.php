 <?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $item_id= $_POST['item_id'];
 $name= $_POST['name'];
  $description = $_POST['description'];
 $price = $_POST['price'];
  $image = $_POST['image'];
 $cat_id = $_POST['cat_id'];
 $rating = $_POST['rating'];
 $q = " update crudtable set item_id=$item_id, name=$name, description=$description, price=$price, image=$image, cat_id=$cat_id, rating=$rating where item_id=$item_id  ";

 $query = mysqli_query($con,$q);

 header('location:display.php');
 }

?>

