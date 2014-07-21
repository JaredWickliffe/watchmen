<?php

require_once '../libraries/database.class.php';
require_once '../libraries/form.class.php';
require_once '../libraries/upload.class.php';
require_once '../libraries/login.class.php';
require_once '../libraries/cart.class.php';
require_once '../libraries/collection.class.php';
require_once '../models/product.model.php';
require_once '../models/category.model.php';


$categories= new Collection('tb_categories');
$this_category = new Category($_GET['category_id']);
$product       = new Product();
# Get featured products
$featured_products = new Collection('tb_products', 'featured', '1');

if($_POST['new_name']){
	$new_cat = new Category();

	$new_cat->name = strtolower($_POST['new_name']);
	$new_cat->create();

	header('location: admin.php');
	exit;
}

if($_FILES){
	$uploaded_files = Upload::to_folder('assets/img/uploads/');

	$filename = $_FILES['file']['name'];

	$output = $filename[0];
}

if($_POST['name']){
	$new_product = new Product();
	$new_product->name=$_POST['name'];
	$new_product->description=$_POST['description'];
	$new_product->price=$_POST['price'];
	$new_product->image=$output;
	$new_product->category_id=$_GET['category_id'];

	if($_POST['featured'] != 1){
		$new_product->featured = 0;
	}else{
		$new_product->featured = 1;
	}

	$new_product->create();

	header('location: admin_products.php?id='.$_GET['category_id']);
	exit;
}

if($product->featured == 1){
	$featured = 'checked';
}else{
	$featured = '';
}

include '../views/admin_header.view.php';
include '../views/add_product_form.view.php';
include '../views/footer.view.php';