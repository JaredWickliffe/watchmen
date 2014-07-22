<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Watchmen</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400|Roboto+Slab:200|Cinzel+Decorative:700' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<div class="title">
			<h1><a href="index.php">Watchmen</a></h1>
		</div>
		<div class="login">
			<?php if($_SESSION['logged_in_admin']): ?>

				<a href="admin.php">Admin</a>

			<?php endif; ?>			
			<?php if($_SESSION['logged_in_admin'] || $_SESSION['logged_in_user']): ?>

				<a href="cart.php">Cart(<?=Cart::get_total()?>)</a>
				<a href="logout.php">Sign Out</a>

			<?php else: ?>

				<a href="login.php">Login/Register</a>
			<?php endif; ?>

				<a href="contact.php">Contact us</a>
		</div>
	</header>
	<div class="nav">
		<ul>
			<h2>Catagories</h2>
			<li><a href="products.php">ALL PRODUCTS</a></li>
			<?php foreach ($categories->items as $category): ?>
				<li><a href="products.php?id=<?=$category['id']?>"><?=ucwords($category['name'])?></a></li>
			<?php endforeach; ?>
		
		</ul>
	</div>
	<div class="container">