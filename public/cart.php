<?php
require_once '../libraries/collection.class.php';
require_once '../libraries/database.class.php';
require_once '../libraries/config.class.php';
require_once '../libraries/form.class.php';
require_once '../libraries/model.class.php';
require_once '../libraries/cart.class.php';
require_once '../models/product.model.php';
require_once '../libraries/login.class.php';

Login::kickout_nonuser();
$categories= new Collection('tb_categories');

$cart_products= array();
$grand_total= 0;

foreach($_SESSION['cart'] as $id => $amount){
	$product = new model('tb_products');

	$product->load($id);
	$total_price = $amount * $product->price;

	$grand_total += $total_price;

	$cart_products[] = array(
		'id'		 =>$product->id,
		'image'      =>$product->image,
		'name'		 =>$product->name,
		'amount'	 =>$amount,
		'price'		 =>$product->price
	);
}
include '../views/header.view.php';
include '../views/cart.view.php';
include '../views/footer.view.php';


