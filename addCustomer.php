<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Add a new customer</title>
</head>
<body>
<?php include('header.php'); ?>
<div class="container my-5">
<form action="confirmaddcustomer.php" method="post" class="form-group">
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" required class="form-control">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" required class="form-control">
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required class="form-control">
  </div>
  <div class="form-group">
    <label for="role">Role</label>
    <input type="text" name="role" id="role" class="form-control" value="customer" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control" required>
  </div>

  <div class="form-group">
    <input type="submit" value="Add customer" class="btn btn-dark">
  </div>
</form>
</div>
</body>
</html>
