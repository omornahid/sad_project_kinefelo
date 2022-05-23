
<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Order Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Order Id </th>
 <th> Order Type </th>
 <th> Name </th>
 <th> Order Date </th>
 <th> Order Address </th>

 <th> Total Price </th>
 <th>E-Mail </th>
 <th> Transection Id </th>
 <th> Status </th>
 <th>Change Status</th>
 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from `order` where status='Not Paid' or status='Paid'";

 $query = mysqli_query($con,$q);
 

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['order_id'];  ?> </td>
 <td> <?php echo $res['order_type'];  ?> </td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['order_date'];  ?> </td>
 <td> <?php echo $res['order_address'];  ?> </td>
 
  <td> <?php echo $res['total_price'];  ?> </td>
<td> <?php echo $res['customer_email'];  ?> </td>
  <td> <?php echo $res['transactionID'];  ?> </td>

  <td> <?php echo $res['status'];  ?> </td>

<td> <button class="btn-primary btn"> <a href="changestatus.php?id=<?php echo $res['order_id']; ?>" class="text-white"> Change Status</a> </button> </td>

 </tr>

 <?php 
 }
 ?>
 
 </table>  
 <input class="button" style=" wdith: 50px; height: 50px;" type="button" value="Back" onclick="history.back()">

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>