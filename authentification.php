<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost:8012/woocommerce-project',
    'ck_47c6977c7cc4165b0c47340cb69a57317ba34372',
    'cs_d6f1c9ba0cd9b17768b4356905b267bff61e8add',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
    ]
);
?>
