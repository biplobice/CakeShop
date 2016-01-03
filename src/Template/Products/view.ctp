<?php use Cake\Routing\Router; ?>
<?php //pr($product); ?>
    <div class="container">
		    <ul class="breadcrumb prod">
			    <li><a href="index.html">Home</a> <span class="divider"></span></li>
				<li class="active">Product</li>
		    </ul>

		<div class="row product-info">
		    <div class="col-md-6">
					
				<div class="image"><a class="cloud-zoom" rel="adjustX: 0, adjustY:0" id='zoom1' href="../../products/dress1home.jpg" title="Nano"><?= $this->Html->image('../products/dress1home.jpg', ['alt' => 'Nano', 'title' => 'Nano', 'id' => 'image']) ?></a></div>
				<div class="image-additional">
					<a title="Dress" rel="useZoom: 'zoom1', smallImage: 'products/dress1home.jpg'" class="cloud-zoom-gallery" href="products/dress1home.jpg"><?= $this->Html->image('../products/dress1home.jpg', ['alt' => 'Dress', 'title' => 'Dress', 'id' => 'image']) ?></a>
					<a title="Dress" rel="useZoom: 'zoom1', smallImage: 'products/dress5home.jpg'" class="cloud-zoom-gallery" href="products/dress5home.jpg"><?= $this->Html->image('../products/dress5home.jpg', ['alt' => 'Dress', 'title' => 'Dress', 'id' => 'image']) ?></a>
					<a title="Dress" rel="useZoom: 'zoom1', smallImage: 'products/dress6home.jpg'" class="cloud-zoom-gallery" href="products/dress6home.jpg"><?= $this->Html->image('../products/dress6home.jpg', ['alt' => 'Dress', 'title' => 'Dress', 'id' => 'image']) ?></a>
					<a title="Dress" rel="useZoom: 'zoom1', smallImage: 'products/dress4home.jpg'" class="cloud-zoom-gallery" href="products/dress4home.jpg"><?= $this->Html->image('../products/dress4home.jpg', ['alt' => 'Dress', 'title' => 'Dress', 'id' => 'image']) ?></a>
				  </div>
  			</div>
		    <div class="col-md-6">
				<h1><?= $product['name'] ?></h1>
				    <div class="line"></div>
						<ul>
							<li><span>Brand:</span> <a href="#">Shop Online</a></li>
							<li><span>Product Code:</span> <?= $product['sku'] ?></li>
							<li><span>Availability: </span><?= ($product['units_in_stock'] > 0) ? 'In Stock' : 'Not available' ?></li>
						</ul>
					<div class="price">
						Price
						<?php
							if ($product['discounts']) {
								echo '<span class="strike">'. $this->number->currency($product['sell_price']) .'</span> ';
								echo '<strong>'. $this->number->currency( $product['sell_price'] - ($product['sell_price'] * ($product['discounts'][0]['amount'] / 100) )) .'</strong>';
							} else {
								echo '<strong>'.$this->number->currency($product['sell_price']).'</strong>';
							}
						?>
					</div>
					<!--
						<span class="price-tax">Ex Tax: $400.00</span>
						    <div class="control-group">
							<label class="control-label">Color<span class="required">*</span></label>
					            <div class="controls">
									<select>
										<option>Please Select...</option>
										<option>Blue</option>
										<option>Red</option>
										<option>Black</option>
									</select>
								</div>
							</div>
						    <div class="control-group">
									<label class="control-label">Size<span class="required">*</span></label>
					            <div class="controls">
									<select>
										<option>Please Select...</option>
										<option>XXS</option>
										<option>XS</option>
										<option>S</option>
									</select>
								</div>
							</div> -->

					<select class="selectpicker" data-width="150px">
						<option>Red</option>
						<option>Blue</option>
						<option>Green</option>
					</select>
					<select class="selectpicker" data-width="150px">
						<option>180 cm</option>
						<option>160 cm</option>
						<option>140 cm</option>
					</select>

					<div class="line"></div>

					<form class="form-inline" id="cartForm">
						<input type="submit" value="Add to Cart" class="btn btn-primary" />
						<!-- <button class="btn btn-primary" type="button">Add to Cart</button> -->
						<input type="hidden" name="user_id" value="<?= $this->request->Session()->read('Auth.User.id') ?>" />
						<input type="hidden" name="product_id" value="<?= $product['id'] ?>" />
						<input type="hidden" name="price" value="<?= $product['sell_price'] ?>" />
						<label>Qty:</label> <input type="text" name="quantity" value="1" placeholder="1" class="col-md-1">
					</form>
					
					<div class="tabs">
					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a href="#home">Description</a></li>
						<li><a href="#profile">Specification</a></li>
						<li><a href="#messages">Reviews</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="home"><?= $product['description'] ?> </div>
						<div class="tab-pane" id="profile">
							<table class="table specs">
							    <tr>
								    <th>Color</th>
								    <th>Size</th>
								    <th>Weight</th>
							    </tr>
							    <tr>
								    <td><?= $product['color'] ?></td>
								    <td><?= $product['size'] ?></td>
								    <td><?= $this->number->precision($product['weight'], 2) ?></td>
							    </tr>
							    <tr>
								    <th>Composition</th>
								    <th>Sleeve</th>
								    <th>Care</th>
							    </tr>
							    <tr>
								    <td>100% Cotton</td>
								    <td> Long Sleeve</td>
								    <td>IRON AT 110ºC MAX</td>
							    </tr>								
					        </table>
						</div>
						<div class="tab-pane" id="messages">
						    <p>There are no reviews yet, would you like to <a href="#review_btn">submit yours?</a></p>
							<h3>Be the first to review “Blue Dress” </h3>
						<form>
							<fieldset>
								<label>Name<span class="required">*</span></label>
								<input type="text" placeholder="Name">
								<label>Email<span class="required">*</span></label>
								<input type="text" placeholder="Email">		
								<label class="rating">Rating</label>
								<?= $this->Html->image('../image/stars-5.png', ['alt' => 'Rating']) ?>
							</fieldset>
						</form>
							<label>Your Review<span class="required">*</span></label>
							<textarea rows="3"></textarea>
						<p id="review_btn">
							<button class="btn btn-default" type="button">Submit Review</button>
						</p>
						</div>
					</div>
					</div>
			</div>
		</div>
		
		<h3 class="related">Related products</h3>
		
		<div class="row">
		<div class="col-md-12">
			<?php foreach($products as $product): ?>
		    <div class="col-md-3">
			    <div class="product">
			    	<?= ($product['discount']) ? '<div class="product_sale">-'.$product['discount'].'%</div>' : ''  ?>
				    <?= $this->Html->image( '../' . $product['thumb'], ['url' => ['action' => 'view', $product['id']]] ) ?>
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
		</div>
	</div>		

	<div id="social_band">
		<div class="container">
		<div class="row">
		<div id="social_about" class="col-md-4">
			<h3>About</h3>
			<div>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br/><br/> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.			</div>
		</div>
		<div id="social_twitter" class="col-md-4">
			<h3>Twitter</h3>
			<div>
				<ul id="twitter_update_list"><li>Twitter feed loading</li></ul>	
				<?= $this->Html->script('twitterFetcher_v9_min.js') ?>		
				<script>twitterFetcher.fetch('256524641194098690', 'twitter_update_list', 2, true, true, false);</script> 

				<!--
				<script type="text/javascript" src="https://api.twitter.com/1/statuses/user_timeline.json?screen_name=NicoleThemes&amp;callback=twitterCallback2&amp;count=3"></script>			
				<a href="http://twitter.com/#!/NicoleThemes" id="twitter_follow">Follow us on twitter</a>
				-->
			</div>
		</div>
		<div id="social_facebook" class="col-md-4">
			<h3>Facebook</h3>
			<div>
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "http://connect.facebook.net/en_US/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-like-box" data-href="https://www.facebook.com/201498429982413" data-width="300" data-color-scheme="light"  data-show-faces="true" data-stream="false" data-header="false" data-border-color="#ffffff" show_border=false></div>
			</div>		
		</div>
	</div>
	</div>
	</div>
	
<?= $this->Html->script('cloud-zoom.1.0.3.js') ?>
<script>
$.fn.CloudZoom.defaults = {
	zoomWidth:"auto",
	zoomHeight:"auto",
	position:"inside",
	adjustX:0,
	adjustY:0,
	adjustY:"",
	tintOpacity:0.5,
	lensOpacity:0.5,
	titleOpacity:0.5,
	smoothMove:3,
	showTitle:false};
		
jQuery(document).ready(function() 
{
    $('#myTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
    })
});
</script>

<script>

$('#cartForm').submit(function(e){
	e.preventDefault(); // Stop default action
	$.ajax({
		type	: "POST",
		data	: $(this).serialize(),
		url		: "<?php echo Router::url(['controller' => 'Carts', 'action' => 'add']); ?>",
		success	: function(data) {
			//
		}
	});
	return false; //stop the actual form post !important!
});
</script>
