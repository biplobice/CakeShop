    <div class="header">
			<nav class="navbar container">
		
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
					<?= $this->Html->link($this->Html->image('logo.png', ['alt' => 'Sapphire']) . ' eCommerce', ['controller' => 'Products', 'action' => 'index', 'home'], ['class' => 'navbar-brand', 'escapeTitle' => false]) ?>
				</a>
			  </div>
  
                 
                 <div class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
                      <li class="active"><a href="index.html">Home</a></li>
                      <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-header">sliders</li>
                          <li><a href="nivo-slider.html">Nivo slider</a></li>
                          <li><a href="flexslider.html" class="ajax_right">Flexslider</a></li>
                          <li><a href="index.html" class="ajax_right">Camera</a></li>
						  <li class="divider"></li>
                          <li class="dropdown-header">ecommerce</li>
                          <li><a href="category.html">Category page</a></li>
                          <li><a href="category_menu.html">Category page left menu</a></li>
                          <li><a href="product.html" class="ajax_right">Product page</a></li>
                          <li><a href="cart.html" class="ajax_right">Cart</a></li>
                          <li><a href="checkout.html" class="ajax_right">Checkout</a></li>
						  <li class="divider"></li>
						  <li class="dropdown-submenu">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">Blog</a>
							  <ul class="dropdown-menu">                          
								  <li><a href="blog.html" class="ajax_right">Blog</a></li>
								  <li><a href="blog-post.html" class="ajax_right">Blog post</a></li>
							  </ul>
							 </li>
                        </ul>
                      </li>
					<li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Other pages <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-2-columns">
							  <li><a href="index_center.html" class="ajax_right">Homepage center logo</a></li>
							  <li><a href="about.html" class="ajax_right">About</a></li>
							  <li><a href="account.html" class="ajax_right">Account</a></li>
							  <li><a href="forgot-password.html" class="ajax_right">Forgot password</a></li>
							  <li><a href="site-map.html" class="ajax_right">Sitemap</a></li>
							  <li><a href="404.html" class="ajax_right">404 Not found</a></li>
                        </ul>
                      </li>   
                      <li><a href="blog.html">Blog</a></li>
                      <li><a href="contact.html" class="ajax_right">Contact</a></li>
                    </ul>

			        <?php if(isset($authUser['id']) && !empty($authUser['id'])): ?>  
                    <ul class="nav navbar-right cart">
                      <li class="dropdown">
                      	<?php $carts = $this->Common->getCartInfoByUserId($authUser['id']); ?>
                      	<?php if( (isset($carts)) && (!empty($carts)) ): ?>
                    <a href="cart.html" class="dropdown-toggle" data-toggle="dropdown"><span><?= $carts->count() ?></span></a>
					
					<div class="cart-info dropdown-menu">
						<table class="table">
							<thead>
							</thead>
							<tbody>
								<?php foreach($carts as $cart): ?>
								<tr>
									<td class="image"><?= $this->Html->image('../'.$cart['product']['thumb'], ['alt' => $cart['product']['name'], 'class' => 'img-responsive']) ?></td>
									<td class="name"><?= $this->Html->link($cart['product']['name'], '/project.html') ?></td>
									<td class="quantity">x&nbsp;<?= $cart['quantity'] ?></td>
									<td class="total">$<?= $cart['price'] ?></td>
									<td class="remove"><?= $this->Html->image('../'.$cart['product']['thumb'], ['alt' => $cart['product']['name'], 'title' => $cart['product']['name']]) ?></td>											
								</tr>
								<?php endforeach; ?>
							</tbody>									
						</table>
						<div class="cart-total">
						  <table>
							 <tbody>
								<tr>
								  <td><b>Sub-Total:</b></td>
								  <td>$400.00</td>
								</tr>
								<tr>
								  <td><b>Total:</b></td>
								  <td>$400.00</td>
								</tr>
							</tbody>
						  </table>
						  <div class="checkout">
						  	<?= $this->Html->link('View Cart', ['controller' => 'Carts', 'action' => 'index'], ['class' => 'ajax_right']) ?>
						  	<!-- <a href="cart.html" class="ajax_right">View Cart</a>  -->
						  	| <a href="checkout.html" class="ajax_right">Checkout</a>
						  </div>
						</div>
					</div>
					<?php endif; ?> 
			      </li>
			     </ul>
					 
                    <form action="http://nicolette.ro/" class="navbar-form navbar-search navbar-right" role="search">
		      		  <div class="input-group"> 
                        <input type="text" name="search" placeholder="Search" class="search-query col-md-2"><button type="submit" class="btn btn-default icon-search"></button> 
                      </div>
                    </form>
                 <?php else: ?>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="http://www.jquery2dotnet.com">Sign Up</a></li>
                  <li class="dropdown">
                     <a href="http://www.jquery2dotnet.com" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
                     <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                        <li>
                           <div class="row">
                              <div class="col-md-12">
                              	<?php 
                              		echo $this->Form->create('User', ['url' => ['controller' => 'Users', 'action' => 'login']]);
									echo $this->Form->input('email', ['label' => false, 'placeholder' => 'Email address']);
									echo $this->Form->input('password', ['label' => false, 'placeholder' => 'Password']);
									echo $this->Form->input('remember_me', ['type' => 'checkbox']) ;
								    echo $this->Form->submit('Sign In', ['class' => 'btn btn-success btn-block']) ;
								    echo $this->Form->end() ;									
                              	?>
                              </div>
                           </div>
                        </li>
                        <li class="text-center">or</li>
                        <br />
                        <li>
                           <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
                           <input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
                        </li>
                     </ul>
                  </li>
               </ul>
                 <?php endif; ?>
					 
                  </div><!-- /.navbar-collapse -->
			</nav>		
		</div>