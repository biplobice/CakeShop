<?php $authUser = ($this->request->Session()->read('Auth.User')); ?>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?= $this->Html->link('Ecommerce Admin', ['controller' => 'Users', 'action' => 'dashboard'], ['class' => 'navbar-brand']) ?>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?= $this->Html->link('<i class="fa fa-fw fa-user"></i> Profile', ['controller' => 'Users', 'action' => 'profile'], ['escapeTitle' => false]) ?></li>
                        <li><?= $this->Html->link('<i class="fa fa-fw fa-envelope"></i> Inbox', ['controller' => 'Users', 'action' => 'inbox'], ['escapeTitle' => false]) ?></li>
                        <li><?= $this->Html->link('<i class="fa fa-fw fa-gear"></i> Settings', ['controller' => 'Users', 'action' => 'settings'], ['escapeTitle' => false]) ?></li>
                        <li class="divider"></li>
                        <li><?= $this->Html->link('<i class="fa fa-fw fa-power-off"></i> Log Out', ['controller' => 'Users', 'action' => 'logout'], ['escapeTitle' => false]) ?></li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
				  	<li><?php echo $this->Html->link(__('<i class="fa fa-fw fa-dashboard"></i> Dashboard'), array('controller' => 'Users', 'action' => 'dashboard'), array('escapeTitle' => false)) ?></li>    
				  	<li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-list-alt"></i> Carts'), array('controller' => 'Carts', 'action' => 'index'), array('escapeTitle' => false)) ?></li>    
				  	<li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-list-alt"></i> Categories'), array('controller' => 'Categories', 'action' => 'index'), array('escapeTitle' => false)) ?></li>    
				  	<li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-list-alt"></i> Discounts'), array('controller' => 'Discounts', 'action' => 'index'), array('escapeTitle' => false)) ?></li>    
				  	<li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-list-alt"></i> Orders'), array('controller' => 'Orders', 'action' => 'index'), array('escapeTitle' => false)) ?></li>    
				  	<li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-list-alt"></i> Pages'), array('controller' => 'Pages', 'action' => 'index'), array('escapeTitle' => false)) ?></li>    
				  	<li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-list-alt"></i> ProductImages'), array('controller' => 'ProductImages', 'action' => 'index'), array('escapeTitle' => false)) ?></li>    
				  	<li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-list-alt"></i> Products'), array('controller' => 'Products', 'action' => 'index'), array('escapeTitle' => false)) ?></li>
				  	<li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-list-alt"></i> Purchases'), array('controller' => 'Purchases', 'action' => 'index'), array('escapeTitle' => false)) ?></li>
				  	<li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-list-alt"></i> Reviews'), array('controller' => 'Reviews', 'action' => 'index'), array('escapeTitle' => false)) ?></li>
				  	<li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-list-alt"></i> Sub Categories'), array('controller' => 'SubCategories', 'action' => 'index'), array('escapeTitle' => false)) ?></li>    
				  	<li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-list-alt"></i> Users'), array('controller' => 'Users', 'action' => 'index'), array('escapeTitle' => false)) ?></li>
				  	<li class="divider"><hr></li>
				  	<li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-cog"></i> Settings'), array('action' => 'Settings'), array('escapeTitle' => false)) ?></li>  
				  	<li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-off"></i> Logout'), array('controller' => 'users', 'action' => 'logout'), array('escapeTitle' => false)) ?></li>  
                    

                    <!-- <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li> -->

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>