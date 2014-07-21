<div class="product">

	<div class="label">
		<h1><?=ucwords($product->name)?></h1>
	</div>

	<img src="assets/img/uploads/<?=$product->image?>">
	
	<div class="description">
		<p><?=$product->description?></p>

		<p class="price">$<?=$product->price?></p>

		<?=Form::open()?>
			<div class="row">								
				<?=Form::submit('Add to cart')?>			
			</div>
		<?=Form::close()?>
		
	</div>
</div>