<?php 

require_once '../libraries/database.class.php';
require_once '../libraries/login.class.php';
require_once '../models/product.model.php';

Login::kickout();

$product = new Product($_GET['id']);
$product->deleted = 1;
$product->save();

header('location: '.$_SERVER['HTTP_REFERER']);
exit;