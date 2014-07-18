<div class="options">
	
	
		<?php foreach ($products->items as $product): ?>
		<div class="products">
			<div class="label"><h3><?=$product['name']?></h3></div>

			<div class="pic">
				<img src="assets/img/uploads/<?=$product['image']?>">
			</div>

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