
		<?= $this->element('slider') ?>
		
		<?php //pr($categories); ?>		
		<?php //pr($products); ?>		
				
		<div class="row">
		    <div class="col-md-3 left-menu">
				<div class="">
					<h3>Category All</h3>
					<ul>
						<li class="active"><a href="category.html">Sub Category All</a></li>
					</ul>
					<?php
						foreach ($categories as $category) {
							echo '<h3>'.$category['name'].'</h3>';
							if (!empty($category['sub_categories'])) {
								echo '<ul>';
								foreach ($category['sub_categories'] as $sub_category) {
									echo '<li><a href="category.html">'.$sub_category['name'].'</a></li>';
								}
								echo '</ul>';
							}
						}
					?>
				</div>


				<div class="options">
				    <select class="selectpicker" data-width="150px">
					    <option>EN</option>
					    <option>IT</option>
					    <option>FR</option>
				    </select>
				    <select class="selectpicker"  data-width="150px">
					    <option>Euro</option>
					    <option>Pounds</option>
					    <option>US Dollars</option>
				    </select>
				</div>
			</div>
		
		<div class="col-md-9">
		
		<div class="row">
			<?php foreach($products as $product): ?>
		    <div class="col-md-4">
			    <div class="product">
			    	<?= ($product['discount']) ? '<div class="product_sale">-'.$product['discount'].'%</div>' : ''  ?>
			    	
				    <a href="product.html">
				    	<?= $this->Html->image( '../' . $product['thumb']) ?>
				    </a>
					<div class="name">
				    <a href="#"><?= $product['name'] ?></a>
				    </div>
				    <div class="price">
				    <p>$<?= $product['sell_price'] ?></p>
				    </div>
				</div>
			</div>			
			<?php endforeach; ?>
		
		</div>

			<div class="row">
			<div class="col-md-12">
				
				<div class="newsletter clearfix">
						<h3>Newsletter</h3>
						<div>
						<input type="text" name="email" class="email">
						<input type="submit" value="Subscribe" class="btn btn-primary">
						</div>
				</div>
			</div>
			</div>
	   </div>
	 </div>	
	</div>		
