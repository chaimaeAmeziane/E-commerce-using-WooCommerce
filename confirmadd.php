<?php 
require 'authentification.php'; 

$name = $_POST["name"];
$description = $_POST["description"];
$price = $_POST["price"];
$image='http://localhost:8012/woocommerce-project/wp-content/uploads/2022/02/'.$_POST["image_link"];
$data = [
    'name' => $name,
    'description' => $description,
    'regular_price' => $price,
    'images' => [
        [
            'src' => $image
        ],
        [
            'src' => $image
        ]
    ]

];

$woocommerce->post('products', $data);
header("Location: index.php");
?>