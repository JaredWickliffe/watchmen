<?php

require_once '../libraries/cart.class.php';
require_once '../libraries/login.class.php';

Login::kickout_nonuser();

$product_id = $_POST['id'];
$amount = $_POST['amount'];


Cart::set_quantity($product_id, $amount);

header('Location: '.$_SERVER['HTTP_REFERER']);
exit;