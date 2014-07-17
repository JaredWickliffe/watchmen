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
				<a href="login.php">Login/Register</a>
				<a href="contact.php">Contact us</a>
		</div>
	</header>
	<div class="nav">
		<ul>
			<h2>Catagories</h2>
			<li><a href="products.php">ALL PRODUCTS</a></li>
			<?php foreach ($categories->items as $category): ?>
				<li>
					<a href="products.php?id=<?=$category['id']?>">
						<?=ucwords($category['name'])?>
					</a>
				</li>
			<?php endforeach; ?>
		
		</ul>
	</div>
	<div class="container">