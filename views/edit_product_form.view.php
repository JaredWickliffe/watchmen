<div class="main">

	<div class="add_product">
		<?=Form::open('', 'post', 'enctype="multipart/form-data"')?>
			<h2>Edit product</h2>
			<div class="row">
				<?=Form::label('name', 'Product Name:')?>
				<?=Form::input('text', 'name', $product->name)?>
			</div>
			<div class="row">
				<?=Form::label('file', 'Change Image:')?>
				<?=Form::file()?>
			</div>
			<div class="row">
				<?=Form::label('description', 'Description:')?>
				<?=Form::textarea('description', $product->description)?>
			</div>
			<div class="row">
				<?=Form::label('price', 'Price ($):')?>
				<?=Form::input('number', 'price', $product->price)?>
			</div>
			<div class="row">
				<?=Form::label('featured', 'Featured:')?>
				<?=Form::input('checkbox', 'featured', 1, $featured)?>
			</div>
			<div class="row">
				<?=Form::submit('Save changes')?>
			</div>
		<?=Form::close()?>
	</div>

</div>

<script src="assets/js/featured.js"></script>