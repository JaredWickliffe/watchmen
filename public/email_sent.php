<?php
require_once '../libraries/collection.class.php';
require_once '../libraries/database.class.php';
require_once '../libraries/config.class.php';
require_once '../libraries/cart.class.php';
require_once '../libraries/login.class.php';

$categories= new Collection('tb_categories');


include '../views/header.view.php';
include '../views/email_sent.view.php';
include '../views/footer.view.php';
