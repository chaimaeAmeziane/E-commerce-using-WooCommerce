<?php 
require 'authentification.php'; 
$id = $_POST["id"];
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
$woocommerce->put('products/'.$id, $data);
header("Location: index.php");

?>