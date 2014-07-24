<?php

require_once '../libraries/database.class.php';
require_once '../libraries/form.class.php';
require_once '../libraries/login.class.php';
require_once '../libraries/cart.class.php';
require_once '../libraries/collection.class.php';
require_once '../models/category.model.php';

Login::kickout();

$categories= new Collection('tb_categories');

if($_POST['new_name']){
	$new_cat = new Category();

	$new_cat->name = strtolower($_POST['new_name']);
	$new_cat->create();

	header('location: admin.php');
	exit;
}

include '../views/admin_header.view.php';
include '../views/admin.view.php';
include '../views/footer.view.php';