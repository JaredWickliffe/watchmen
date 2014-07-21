
<div class="main">
			
	<h2>Cart</h2>

	<table>
		<tr>
			<th>Image</th>
			<th width="150">Name</th>
			<th width="60">Price</th>
			<th width="70">Total price</th>
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

				<td>$<?=$product['total_price']?></td>

				<td>
					<a href="remove_from_cart.php?id=<?=$product['id']?>">Remove</a>
				</td>
			</tr>
			<?php endforeach?>
		<?php else: ?>
			<tr>
				<td colspan="8">Your cart has no mass.</td>
			</tr>
		<?php endif; ?>
	</table>
	<div class="checkout">
		<p class="total">Grand Total: $<?=$grand_total?></p>
	</div>
</div>