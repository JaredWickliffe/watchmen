<?php
require_once '../libraries/database.class.php';
require_once '../libraries/login.class.php';
require_once '../libraries/form.class.php';
require_once '../libraries/cart.class.php';
require_once '../libraries/collection.class.php';

$categories= new Collection('tb_categories');

$featured_products = new Collection('tb_products', 'featured', '1', $_GET['id']);


include '../views/header.view.php';
include '../views/home.view.php';
include '../views/footer.view.php';