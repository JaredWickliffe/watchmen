<?php
require_once '../libraries/database.class.php';
require_once '../libraries/form.class.php';
require_once '../libraries/login.class.php';
require_once '../libraries/cart.class.php';
require_once '../libraries/collection.class.php';
require_once '../models/product.model.php';

$categories= new Collection('tb_categories');
$product = new Product($_GET['id']);


include '../views/header.view.php';
include '../views/product.view.php';
include '../views/footer.view.php';