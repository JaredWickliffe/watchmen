<?php
require_once '../libraries/form.class.php';
require_once '../libraries/collection.class.php';

$categories= new Collection('tb_categories');

include '../views/header.view.php';
include '../views/contact.view.php';
include '../views/footer.view.php';