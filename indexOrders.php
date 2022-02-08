<!DOCTYPE html >
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>List orders</title>
</head>
<body>

<?php include('header.php'); ?>
    <?php
    $orders= file_get_contents('http://localhost:8012/woocommerce-client/ListOrders.php');
    $orders = json_decode($orders, true);
    ?>
       
    
       <div class="container my-5">
    <table class="table">
      <thead class="thead-light">
       <tr>
           <th>Order ID</th>
           <th> Full Name</th>
           <th> Address</th>
           <th> City</th>
           <th> Country</th>
           <th> Email</th>
           <th>Order status</th>
           <th>Payment method</th>
</tr>
</thead>

         <?php 
         foreach($orders as $order)
         {
            echo'<tr><td style="width:10%;">'.$order["id"].'</td>';
            echo'<td>'.$order["billing"]["first_name"].' '.$order["billing"]["last_name"].'</td>';
            echo'<td>'.$order["billing"]["address_1"].'</td>';
            echo'<td>'.$order["billing"]["city"].'</td>';
            echo'<td>'.$order["billing"]["country"].'</td>';
            echo'<td>'.$order["billing"]["email"].'</td>';
            echo'<td>'.$order["status"].'</td>';
            echo'<td>'.$order["payment_method"].'</td></tr>';
         }

         ?>

   </table>
        </div>

    
</body>
</html>