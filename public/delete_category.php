<?php

require_once '../libraries/database.class.php';
require_once '../libraries/login.class.php';
require_once '../models/category.model.php';

Login::kickout();

if($_GET['id']){
	$category = new Category($_GET['id']);
	$category->delete();
}

header('location: admin.php');
exit;