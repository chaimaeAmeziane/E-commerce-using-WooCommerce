<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>List customers</title>
</head>
<body>
<?php include('header.php'); ?>
    <?php
    $customers = file_get_contents('http://localhost:8012/woocommerce-client/ListCustomers.php');
    $customers = json_decode($customers, true);
    ?>
       
     <div class="container my-5">
     <button type="button" class="btn btn-primary mb-3"><a href="addCustomer.php" style="color:white;">Add a customer</a></button>

    <table class="table">
      <thead class="thead-dark">
       <tr>
        
           <th>First Name</th>
           <th>Last Name</th>
           <th>Username</th>
           <th>Role</th>
           <th>Email</th>
           <th style="width=120%">Actions</th>
</thead>
      <tr>
         <?php 
         foreach($customers as $customer)
         {
            echo'<tr><td>'.$customer["first_name"].'</td>';
            echo'<td>'.$customer["last_name"].'</td>';
            echo'<td>'.$customer["username"].'</td>';
            echo'<td>'.$customer["role"].'</td>';
            echo'<td>'.$customer["email"].'</td>';
            echo'<td width="20%"><a href="updatecustomer.php?id='.$customer["id"].'"><button type="button" class="btn btn-dark">Update</button></a> <a href="deletecustomer.php?id='.$customer["id"].'"><button type="button" class="btn btn-light">Delete</button></a></td>';
         }

         ?>

   </table>
        </div>

</body>
</html>