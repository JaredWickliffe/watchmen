<?php
require_once '../libraries/login.class.php';
require_once '../libraries/cart.class.php';

Login::kickout_nonuser();

$product_id = $_POST['id'];
$amount = $_POST['amount'];

Cart::add_product($product_id, $amount);

header('Location: '.$_SERVER['HTTP_REFERER']);
exit;