 <?php

include 'conn.php';

$item_id = $_GET['item_id'];

$q = "DELETE FROM `products` WHERE item_id=$item_id";

$result = $con->query($q);

  if ($result === TRUE) {
    echo "cart deleted successfully";
    echo "<script>window.location.assign('display.php');</script>";
    
    
  } else {
   echo "Error: " . $q . "<br>" . $con->error;
   echo "<script>window.location.assign('display.php');</script>";
    
  }


 

?>