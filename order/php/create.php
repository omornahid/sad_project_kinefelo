<?php 

if (isset($_POST['create'])) {
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
   

	$user_data ='&date='.$date.'&address='.$address.'&status='.$status.'&email='.$email.'&transaction='.$transaction;

	if (empty($date)) {
		header("Location: ../index.php?error=Date is required&$user_data");
	}else if (empty($address)) {
		header("Location: ../index.php?error=Address is required&$user_data");
	}else if (empty($status)) {
		header("Location: ../index.php?error=Status is required&$user_data");
	}else if (empty($email)) {
		header("Location: ../index.php?error=Email is required&$user_data");
	}else if (empty($transaction)) {
		header("Location: ../index.php?error=Transaction is required&$user_data");
	}else {

       $sql = "INSERT INTO orders(date,address,status,email,transaction) 
               VALUES('$date','$address','$status','$email','$transaction')";
        
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}