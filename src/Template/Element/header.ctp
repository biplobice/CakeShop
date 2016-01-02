    <div class="header">
			<nav class="navbar container">
		
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
					<?= $this->Html->link($this->Html->image('logo.png', ['alt' => 'Sapphire']) . ' eCommerce', ['controller' => 'Products', 'action' => 'index'], ['class' => 'navbar-brand', 'escapeTitle' => false]) ?>
				</a>
			  </div>
  
                 
                 <div class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
					  <li><?= $this->Html->link('Home', ['controller' => 'Products', 'action' => 'index']) ?></li>
					  <li><?= $this->Html->link('About Us', ['controller' => 'Products', 'action' => 'about']) ?></li>
					  <li><?= $this->Html->link('Contact Us', ['controller' => 'Products', 'action' => 'contact']) ?></li>
                    </ul>

			        <?php if(isset($authUser['id']) && !empty($authUser['id'])): ?>  
  
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-user"></span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-user"></i> Profile'), array('controller' => 'users', 'action' => 'profile', $authUser['id']), array('escapeTitle' => false)); ?></li>                        
                        <li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-cog"></i> Change Password'), array('controller' => 'users', 'action' => 'change_password', $authUser['id']), array('escapeTitle' => false)); ?></li>                        
                        <li class="divider"></li>
                        <li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-off"></i> Logout'), array('controller' => 'users', 'action' => 'logout'), array('escapeTitle' => false)) ?></li>  
                    </ul>
                </li>
            </ul>
             		        	
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

                 <?php else: ?>
               <ul class="nav navbar-nav">
                  <li><a href="#">Sign Up</a></li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
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

                    <form action="#" class="navbar-form navbar-search navbar-right" role="search">
		      		  <div class="input-group"> 
                        <input type="text" name="search" placeholder="Search" class="search-query col-md-2"><button type="submit" class="btn btn-default icon-search"></button> 
                      </div>
                    </form>
					 
                  </div><!-- /.navbar-collapse -->
			</nav>		
		</div>