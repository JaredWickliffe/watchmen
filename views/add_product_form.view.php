<div class="main">

	<div class="add_product">
		<?=Form::open('', 'post', 'enctype="multipart/form-data"')?>
			<h2>Add product to: <?=ucwords($this_category->name)?></h2>
			<div class="row">
				<?=Form::label('name', 'Product Name:')?>
				<?=Form::input('text', 'name')?>
			</div>
			<div class="row">
				<?=Form::label('file', 'Image:')?>
				<?=Form::file()?>
			</div>
			<div class="row">
				<?=Form::label('description', 'Description:')?>
				<?=Form::textarea('description')?>
			</div>
			<div class="row">
				<?=Form::label('price', 'Price ($):')?>
				<?=Form::input('number', 'price')?>
			</div>
			<div class="row">
				<?=Form::label('featured', 'Featured:')?>
				<?=Form::input('checkbox', 'featured', 1, $featured)?>
			</div>
			<div class="row">
				<?=Form::submit('Add Product')?>
			</div>
		<?=Form::close()?>
	</div>

</div>