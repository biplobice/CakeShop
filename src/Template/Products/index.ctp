    <?= $this->Html->css('camera.css') ?>

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
		
	<?= $this->Html->script('camera.js') ?>
	<script>
		$(document).ready( function()
		{	
			jQuery('#slideshow0 > div').camera({
			alignment:"center",
			autoAdvance:true,
			mobileAutoAdvance:true,
			barDirection:"leftToRight",
			barPosition:"bottom",
			cols:6,
			easing:"easeInOutExpo",
			mobileEasing:"easeInOutExpo",
			fx:"random",
			mobileFx:"random",
			gridDifference:250,
			height:"auto",
			hover:true,
			loader:"pie",
			loaderColor:"#eeeeee",
			loaderBgColor:"#222222",
			loaderOpacity:0.3,
			loaderPadding:2,
			loaderStroke:7,
			minHeight:"200px",
			navigation:true,
			navigationHover:true,
			mobileNavHover:true,
			opacityOnGrid:false,
			overlayer:true,
			pagination:true,
			pauseOnClick:true,
			playPause:true,
			pieDiameter:38,
			piePosition:"rightTop",
			portrait:false,
			rows:4,
			slicedCols:12,
			slicedRows:8,
			slideOn:"random",
			thumbnails:false,
			time:7000,
			transPeriod:1500,				
			imagePath: '../image/'
		});
	});
	</script>    