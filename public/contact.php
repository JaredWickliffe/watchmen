<?php
require_once '../libraries/form.class.php';
require_once '../libraries/database.class.php';
require_once '../libraries/login.class.php';
require_once '../libraries/cart.class.php';
require_once '../libraries/collection.class.php';
require_once '../libraries/email.class.php';


$categories= new Collection('tb_categories');


$email = new Email();
if ($_POST['email'] && strlen($_POST['message']) >= 0) {
	$email->to 	    = 'j.r.r.wickliffe@gmail.com';
	$email->from    = $_POST['email'];
	$email->subject = $_POST['subject'];
	$email->message = $_POST['message'];

	$email->send();

	if($email->success){
		header('location: email_sent.php');
	}
}

include '../views/header.view.php';
include '../views/contact.view.php';
include '../views/footer.view.php';