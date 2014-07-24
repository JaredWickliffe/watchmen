<?php

require_once '../libraries/database.class.php';
require_once '../libraries/form.class.php';
require_once '../libraries/upload.class.php';
require_once '../libraries/login.class.php';
require_once '../libraries/cart.class.php';
require_once '../libraries/collection.class.php';
require_once '../models/product.model.php';
require_once '../models/category.model.php';

Login::kickout();

$categories        = new Collection('tb_categories');
$this_category     = new Category($_GET['category_id']);
$product           = new Product($_GET['id']);
# Get featured products
$featured_products = new Collection('tb_products', 'featured', '1');

if($_POST['new_name']){
	$new_cat = new Category();

	$new_cat->name = strtolower($_POST['new_name']);
	$new_cat->create();

	header('location: admin.php');
	exit;
}

if($_FILES['file']['name'][0]){
	$uploaded_files = Upload::to_folder('assets/img/uploads/');

	$filename = $_FILES['file']['name'];

	$output = $filename[0];
	$product->image=$output;
}else{
	$product->image=$product->image;
}

if($_POST['name']){
	$product->name=$_POST['name'];
	$product->description=$_POST['description'];
	$product->price=$_POST['price'];

	if($_POST['featured'] != 1){
		$product->featured = 0;
	}else{
		$product->featured = 1;
	}
	
	$product->save();
	header('location: admin_products.php?id='.$product->category_id);
	exit;	
}

if($product->featured == 1){
	$featured = 'checked';
}else{
	$featured = '';
}

include '../views/admin_header.view.php';
include '../views/edit_product_form.view.php';
include '../views/footer.view.php';