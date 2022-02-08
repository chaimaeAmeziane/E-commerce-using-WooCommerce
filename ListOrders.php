<?php
require 'authentification.php'; ?>
<?php
echo json_encode($woocommerce->get('orders'));
?>