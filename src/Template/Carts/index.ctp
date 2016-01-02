		
    <div class="container">
		<div class="row">
		    <div class="col-md-12">
			    <div class="breadcrumbs">
				    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a> <span class="divider"></span></li>
                        <li class="active">Shopping Cart</li>
                    </ul>
				</div>
			</div>
		</div>
		
		<div class="row">
		    <div class="col-md-12">
				<h2>Shopping Cart</h2>
			</div>
		</div>
		
		<div class="row">
		    <div class="col-md-12">
			<div class="cart-info">
				<table class="table">
					<thead>
					    <tr>
							<th class="image">Image</th>
							<th>Product</th>
							<th>Model</th>
							<th>Price</th>
							<th>Quantity</th>
							<th class="total">Total</th>
						</tr>
					</thead>
					<tbody>
						<?php $carts = $this->Common->getCartInfoByUserId($authUser['id']); ?>
						<?php foreach($carts as $cart): ?>
						<tr>
						    <td class="image"><?= $this->Html->image('../'.$cart['product']['thumb'], ['alt' => $cart['product']['name']]) ?></td>
							<td class="name"><?= $this->Html->link($cart['product']['name'], 'product.html') ?></td>
							<td><?= $cart['product']['model'] ?></td>
							<td>$<?= $cart['price'] ?></td>
							<td class="quantity">
								<input type="text" size="1" value="<?= $cart['quantity'] ?>" name="quantity">
								<input type="image" title="Update" alt="Update" src="img/update.png">
								<input type="image" title="Remove" alt="Remove" src="img/remove.png">
							</td>
							<td class="total">$130.00</td>
						</tr>
						<?php endforeach; ?>
					</tbody>									
				</table>
            </div> 			
		    </div>					
		</div>
		
		<div class="row">
		   
		    <div class="col-sm-4 col-sm-offset-8">
				<div class="cart-totals">
					<table class="table">
					    <tr>
							<th>Cart Subtotal</th>
							<td>$360.00</td>
						</tr>
					    <tr>
							<th>Shipping</th>
							<td>Free Shipping</td>
						</tr>
					    <tr>
							<th><span>Order Total</span></th>
							<td>$360.00</td>
						</tr>					
				</table>
				<p>
				<a class="btn btn-primary" href="checkout.html">
					Proceed to Checkout
				</a>
				</p>
				</div>

			</div>
		
		</div>
	

	</div>		