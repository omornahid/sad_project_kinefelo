<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM `order` WHERE `order_id`=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$date = validate($_POST['date']);
	$address = validate($_POST['address']);
    $status = validate($_POST['status']);
	$email = validate($_POST['email']);
    $transaction = validate($_POST['transaction']);
	$id = validate($_POST['id']);

	if (empty($date)) {
		header("Location: ../update.php?id=$id&error=Date is required");
	}else if (empty($address)) {
		header("Location: ../update.php?id=$id&error=Address is required");
	}else if (empty($status)) {
		header("Location: ../update.php?id=$id&error=Status is required");
	}else if (empty($email)) {
		header("Location: ../update.php?id=$id&error=Email is required");
	}else if (empty($transaction)) {
		header("Location: ../update.php?id=$id&error=Transaction is required");
	}else {

       $sql = "UPDATE `order`
               SET order_address='$address',status='$status',customer_email='$email',transactionID='$transaction'
               WHERE order_id=$id";
        
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}