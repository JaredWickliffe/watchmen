<div class="options">
	
	
		<?php foreach ($products->items as $product): ?>
		<div class="products">
			<div class="label"><a href="product.php?id=<?=$product['id']?>">
				<h3><?=strtoupper($product['name'])?></h3>
			</a></div>
			
			<a href="product.php?id=<?=$product['id']?>">
				<img src="assets/img/uploads/<?=$product['image']?>" alt="">
			</a>

			<div class="row prod_text over">
				<?=$product['description']?>
			</div>

			<div class="row">$<?=$product['price']?></div>

			<div class="buy">
				<?php if(($_SESSION['logged_in_user'] || $_SESSION['logged_in_admin']) == true): ?>
				<?=Form::open('add_to_cart.php')?>
					<?=Form::hidden('id', $product['id'])?>
					<?=Form::number('amount', '1', 'min="1" max="10"')?>
					<?=Form::submit('Add to cart')?>
				<?=Form::close()?>
				<?php else: ?>
					Please login to buy products.
				<?php endif; ?>
			</div>
		</div>
		<?php endforeach; ?>
	

</div>