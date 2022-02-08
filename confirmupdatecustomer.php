<?php 
require 'authentification.php'; 
$id = $_POST["id"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$role = $_POST["role"];
$email = $_POST["email"];
$data = [
    'first_name' => $firstname,
    'last_name' => $lastname,
    'username' => $username,
    'role' => $role,
    'email' => $email
];
$woocommerce->put('customers/'.$id, $data);
header("Location: indexCustomers.php");

?>