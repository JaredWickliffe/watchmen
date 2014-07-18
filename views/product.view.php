<div class="product">

	<h1><?=$product->name?></h1>

	<img src="assets/img/uploads/<?=$product->image?>">
	
	<div class="info">
		<p><?=$product->description?></p>

		<p class="price">$<?=$product->price?></p>

		<?=Form::open('add_to_cart.php')?>
			<div class="row">								
				<?=Form::submit('Add to cart')?>			
			</div>
		<?=Form::close()?>
		
	</div>
</div>