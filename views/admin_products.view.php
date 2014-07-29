<div class="options">
	<?php if ($_GET['id']):?>
		<div class="row">
			<h3>Category:</h3>
			<?=Form::open()?>

				<?=Form::input('text', 'name', ucwords($category->name))?>

				<?=Form::submit('Save')?>

				<div class="edit_button">
					<a href="delete_category.php?id=<?=$category->id?>">Delete</a>
				</div>
			<?=Form::close()?>
		</div>

	
		<div class="row">
			<div class="edit_button">
				<a href="add_product.php?category_id=<?=$_GET['id']?>">Add Product</a>
			</div>
		</div>
	<?php endif; ?>
	
	<?php foreach ($products->items as $product): ?>
		<div class="products">

			<div class="label">
				<h3><?=strtoupper($product['name'])?></h3>
			</div>

			<img src="assets/img/uploads/<?=$product['image']?>" alt="">

			<div class="row">
				<p>
					<?=$product['description']?>
				</p>

				$<?=$product['price']?>
			</div>

			<div class="edit_button">
				<a href="edit_product.php?id=<?=$product['id']?>">Edit</a>
			</div>

			<div class="delete edit_button">
				<a href="delete_product.php?id=<?=$product['id']?>">Delete</a>
			</div>
		</div>
	<?php endforeach; ?>
	
</div>