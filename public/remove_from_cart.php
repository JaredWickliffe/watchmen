<?php

require_once '../libraries/cart.class.php';
require_once '../libraries/login.class.php';

Login::kickout_nonuser();

$product_id = $_GET['id'];

Cart::remove_product($product_id);

header('location: '.$_SERVER['HTTP_REFERER']);
exit;