<?php
require 'authentification.php'; 

$data = [
    'email' => 'haitamameziane@gmail.com',
    'first_name' => 'haitam',
    'last_name' => 'ameziane',
    'username' => 'haitam.ameziane',
    'billing' => [
        'first_name' => 'haitam',
        'last_name' => 'ameziane',
        'company' => '',
        'address_1' => 'Rue Astoria 4',
        'address_2' => '',
        'city' => 'Tanger',
        'state' => '',
        'postcode' => '90060',
        'country' => 'MA',
        'email' => 'haitamameziane@gmail.com',
        'phone' => '(555) 555-5555'
    ],
    
];

print_r($woocommerce->post('customers', $data));
?>
