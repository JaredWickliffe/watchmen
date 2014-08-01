<div class="info">
	<h1>Welcome to Watchmen</h1>
	<p>
		Wellcome to Watchmen. Watchmen has been selling mens watches for over three decades now and is one of the leading watch sales companies in the world. Originaly just a small business in the middle of a town, Watchmen has since grown to be a multi-national company dedicated to helping men everywhere find the watch they have been looking for.
	</p>
	<p>
		With over 150 stores over multipule countries, Watchmen has become one of the most recognized and trusted watch sale companies around. Our teams are know for their great customer service and excellent knowledge of all things watch related.<br><br>If you have any questions don't hesitate to contact us via our <a id="c_link" href="contact.php">contact</a> page.
	</p>
</div>
<div class="promoted">
	<?php foreach($featured_products->items as $f_prod): ?>
		<div class="featured">
			<div class="label">
				<a href="product.php?id=<?=$f_prod['id']?>">
				<h2><?=strtoupper($f_prod['name'])?></h2>
				</a>
			</div>
			<div class="image">
				<a href="product.php?id=<?=$f_prod['id']?>">
				<img src="assets/img/uploads/<?=$f_prod['image']?>" alt="">
				</a>
			</div>

			<div  class="prod_text row">
				<?=$f_prod['description']?>
			</div>

			<div class="row">$<?=$f_prod['price']?></div>

			<div class="row">
				<a id="p_link" href="product.php?id=<?=$f_prod['id']?>">To Product -></a>
			</div>
		</div>
	<?php endforeach; ?>
</div>
