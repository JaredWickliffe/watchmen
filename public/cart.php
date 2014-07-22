<?php
require_once '../libraries/login.class.php';
require_once '../libraries/database.class.php';
require_once '../libraries/config.class.php';
require_once '../libraries/form.class.php';
require_once '../libraries/model.class.php';
require_once '../libraries/cart.class.php';
require_once '../libraries/collection.class.php';
require_once '../models/product.model.php';

$categories= new Collection('tb_categories');

$cart_products= array();
$grand_total= 0;

foreach($_SESSION['cart'] as $id => $amount){
	$product = new Model('tb_products');

	$product->load($id);

	$cart_products[] = array(
		'image'      =>$product->image,
		'price'		 =>$product->price,
		'name'		 =>$product->name,
		'id'		 =>$product->id
	);
}

include '../views/header.view.php';
include '../views/cart.view.php';
include '../views/footer.view.php';


