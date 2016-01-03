    <?= $this->Html->css('camera.css') ?>
 
  	<div class="container">
  
		<?php
			if (empty($this->request->params['pass'])) {
				echo $this->element('slider');
			}
		?>
	
				
		<div class="row">
		    <div class="col-md-3 left-menu">
				<div class="">
					<h3><?= $this->Html->link('All Products', ['controller' => 'Products', 'action' => 'index']) ?></h3>
					<?php
						foreach ($categories as $category) {
							echo '<h3>'.$this->Html->link($category['name'], ['controller' => 'Products', 'action' => 'index', $category['id']]).'</h3>';
							if (!empty($category['sub_categories'])) {
								echo '<ul>';
								foreach ($category['sub_categories'] as $sub_category) {
									echo '<li>'. $this->Html->link($sub_category['name'], ['controller' => 'Products', 'action' => 'index', $category['id'], $sub_category['id']]) . '</li>';
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
			    	<?= ($product['discounts']) ? '<div class="product_sale">-'.$product['discounts'][0]['amount'].'%</div>' : ''  ?>
				    <?= $this->Html->image( '../' . $product['thumb'], ['url' => ['action' => 'view', $product['id']]] ) ?>
					<div class="name">
				    <a href="#"><?= $product['name'] ?></a>
				    </div>
				    <div class="price">
				    <p><?= $this->number->currency($product['sell_price']) ?></p>
				    </div>
				</div>
			</div>			
			<?php endforeach; ?>
		
		</div>

		<div class="row">
			<div class="col-md-12">
				<ul class="pagination pull-right">
		            <?= $this->Paginator->prev('< ' . __('previous')) ?>
		            <?= $this->Paginator->numbers() ?>
		            <?= $this->Paginator->next(__('next') . ' >') ?>
				</ul>
				<!-- <p><?= $this->Paginator->counter() ?></p> -->
			</div>
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