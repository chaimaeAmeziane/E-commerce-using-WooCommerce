<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>List products</title>
</head>
<body>
<?php include('header.php'); ?>
    <?php
    $products = file_get_contents('http://localhost:8012/woocommerce-client/ListProducts.php');
    $products = json_decode($products, true);
    ?>
       
     <div class="container my-5">
     <button type="button" class="btn btn-secondary mb-3"><a href="addproduct.php" style="color:white;">Add a product</a></button>

    <table class="table">
      <thead class="thead-dark">
       <tr>
        
           <th>Name</th>
           <th>Description</th>
           <th>Price</th>
           <th>Picture</th>
           <th style="width=120%">Actions</th>
</thead>
      <tr>
         <?php 
         foreach($products as $product)
         {
            echo'<tr><td width="20%">'.$product["name"].'</td>';
            echo'<td width="40%">'.$product["description"].'</td>';
            echo'<td width="8%">'.$product["price"].'</td>';
            echo'<td width="13%"><img width="100%" src="'.$product["images"][0]["src"].'"></td>';
            echo'<td width="20%"><a href="update.php?id='.$product["id"].'"><button type="button" class="btn btn-warning">Update</button></a> <a href="delete.php?id='.$product["id"].'"><button type="button" class="btn btn-danger">Delete</button></a></td>';
         }

         ?>

   </table>
        </div>

</body>
</html>