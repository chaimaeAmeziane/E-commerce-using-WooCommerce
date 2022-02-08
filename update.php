<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Update Product</title>
</head>
<body>
<?php include('header.php'); ?>
<?php 
require 'authentification.php'; 
$id = $_GET["id"];
$product = json_encode($woocommerce->get("products/".$id));
$product = json_decode($product,true);
?>
<div class="container my-5">
<form action="confirmupdate.php" method="post" class="form-group">
<div  class="form-group">
    <input type="hidden" name="id" value="<?= $id ?>" >
  </div>
  <div  class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="<?= $product["name"] ?>" required class="form-control">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" name="description" class="form-control" value="<?= $product["description"] ?>" required></input>
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" name="price" id="price" value="<?= $product["price"] ?>" required class="form-control">
  </div>
  <div class="form-group">
    <label>Image</label>
    <input type="file" name="image_link" class="form-control"  value="<?= $product["images"][0]["src"] ?>">
  </div>
  <div class="form-group">
    <input type="submit" value="Update product" class="btn btn-light">
  </div>
</form>
</div>
</body>
</html>
