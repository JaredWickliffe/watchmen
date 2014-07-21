<?php
require_once '../libraries/login.class.php';
require_once '../libraries/database.class.php';
require_once '../libraries/config.class.php';
require_once '../libraries/form.class.php';
require_once '../libraries/model.class.php';
require_once '../libraries/cart.class.php';
require_once '../models/product.model.php';


$cart_products= array();
$grand_total= 0;

foreach($_SESSION['cart'] as $id => $amount){
	$product = new Model('tb_products');

	$product->load($id);

	$grand_total += $total_price;

	$cart_products[] = array(
		'image'      =>$product->image,
		'total_price'=>$total_price,
		'price'		 =>$product->price,
		'name'		 =>$product->name,
		'id'		 =>$product->id
	);
}

include '../views/header.view.php';
include '../views/cart.view.php';
include '../views/footer.view.php';


