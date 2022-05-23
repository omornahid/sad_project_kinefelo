<?php	
	include 'db_connection.php';
	
	$sql = 'SELECT * FROM `order` WHERE order.status="Paid"';
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo '<input class="button" style="margin-right: 310px; wdith: 50px; height: 50px;" type="button" value="Back" onclick="history.back()">
		';
	  echo "<table>";
	  echo "<tr><td>Order ID</td><td>Customer Name</td><td>Address</td><td>Email</td><td>Phone Number</td><td>Total Price</td><td>Status</td><td>Delivered?</td></tr>";
	  while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row['order_id']."</td><td>".$row['name']."</td><td>".$row['order_address']."</td><td>".$row['customer_email']."</td><td>".$row['phone']."</td><td>".$row['total_price']."</td><td>".$row['status']."</td><td><button class='btn-green' onClick='alert(\"Delivered!\");'>✓</button> <button class='btn-red' onClick='alert(\"Cancelled!\");'>X</button></td></tr>";
	  }
	  echo "</table>";
	} else {
	  echo "0 results";
	}
	
	$conn -> close();
?>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 5px;
}
.btn-green {
	background-color: green;
	color: white;
	width: 30px;
	padding: 2px;
	border: none;
	border-radius: 5px;
}
.btn-red {
	background-color: red;
	color: white;
	width: 30px;
	padding: 2px;
	border: none;
	border-radius: 5px;
}
</style>