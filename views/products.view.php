<div class="options">
	
	
		<?php foreach ($products->items as $product): ?>
		<div class="products">
			<div class="label"><a href="product.php?id=<?=$product['id']?>">
				<h3><?=strtoupper($product['name'])?></h3>
			</a></div>
			
			<a href="product.php?id=<?=$product['id']?>">
				<img src="assets/img/uploads/<?=$product['image']?>" alt="">
			</a>

			<p>
			<hr>
				<?=$product['description']?>
			</p>

			<div class="row">$<?=$product['price']?></div>

			<div class="buy">
				<?=Form::open('add_to_cart.php')?>						
						<?=Form::submit('Add to cart')?>
				<?=Form::close()?>
			</div>
		</div>
		<?php endforeach; ?>
	

</div>