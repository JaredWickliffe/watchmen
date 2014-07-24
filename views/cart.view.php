<div class="main">
			
	<h2>Cart</h2>

	<table>
		<tr>
			<th>Image</th>
			<th width="150">Name</th>
			<th width="100">Quantity</th>
			<th width="100">Price</th>
			<th></th>
		</tr>
		<?php if(count($cart_products)):?>
			<?php foreach($cart_products as $product):?>
			<tr>
				<td>
					<a href="product.php?id=<?=$product['id']?>"><img src="assets/img/uploads/<?=$product['image']?>"></a>
				</td>

				<td>
					<a href="product.php?id=<?=$product['id']?>"><?=$product['name']?></a>
				</td>
				
				<td>$<?=$product['price']?></td>

				<td>
					<?=Form::open('update_amount.php')?>
						<?=Form::input('hidden', 'id', $product['id'])?>
						<?=Form::input('number', 'amount', $product['amount'], 'min="1" max="10"')?>
						<?=Form::submit('Save')?>

					<?=Form::close()?>
				</td>

				<td>
					<a href="remove_from_cart.php?id=<?=$product['id']?>">Remove</a>
				</td>
			</tr>
			<?php endforeach?>
		<?php else: ?>
			<tr>
				<td colspan="8">Your cart has no items.</td>
			</tr>
		<?php endif; ?>
	</table>
	<div class="checkout">
		<p class="total">Grand Total: $<?=$grand_total?></p>
</div>