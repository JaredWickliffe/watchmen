<div class="product">

	<div class="label">
		<h1><?=ucwords($product->name)?></h1>
	</div>

	<img src="assets/img/uploads/<?=$product->image?>">
	
	<div class="description">
		<div class="row">
			<br>
			<?=$product->description?>
		</div>

		<div class="row">$<?=$product->price?></div>

			<div class="row">								
				<?php if(($_SESSION['logged_in_user'] || $_SESSION['logged_in_admin']) == true): ?>

					<?=Form::open('add_to_cart.php')?>
						<?=Form::input('number', 'amount', '1', 'min="1" max="10"')?>
						<?=Form::submit('Add to cart')?>
					<?=Form::close()?>
				<?php else: ?>
					<p>Please login to buy products.</p>
				<?php endif; ?>			
			</div>
		
	</div>
</div>