<div class="category_list">
	<nav>
		<h3>Categories</h3>
		<ul>
			<li>
				<a href="admin_products.php">ALL PRODUCTS</a>
			</li>
			<?php foreach ($categories->items as $cat): ?>
				<li>
					<a href="admin_products.php?id=<?=$cat['id']?>"><?=ucwords($cat['name'])?></a>
				</li>
			<?php endforeach; ?>
		</ul>
		<?=Form::open()?>
			<?=Form::input('text', 'new_name')?>
			<?=Form::submit('Add Category')?>
		<?=Form::close()?>
	</nav>
</div>