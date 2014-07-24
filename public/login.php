<?php
require_once '../libraries/login.class.php';
require_once '../libraries/form.class.php';
require_once '../libraries/collection.class.php';
require_once '../libraries/cart.class.php';

$categories= new Collection('tb_categories');

if($_POST['signin_username'] && $_POST['signin_password']){
	Login::sign_in();
}

if($_POST['register_username'] || $_POST['register_password'] || $_POST['register_confirm_password']){
	Login::register();
}

if(($_SESSION['logged_in_user'] || $_SESSION['logged_in_admin'])){
	header('location: products.php');
}
include '../views/header.view.php';
include '../views/login.view.php';
include '../views/footer.view.php';