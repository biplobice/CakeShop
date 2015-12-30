<?php $user = ($this->request->Session()->read('Auth.User')); ?>

<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                    class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <?php echo $this->Html->link('eCommerce Admin Panel', '/admin/', array('class' => 'navbar-brand')); ?>
        </div>
        <?php if($user): ?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-user"></span> Logged in as <?= $user['email'] ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-user"></i> Profile'), array('controller' => 'users', 'action' => 'view', $user['id']), array('escapeTitle' => false)); ?></li>                        
                        <li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-cog"></i> Change Password'), array('controller' => 'users', 'action' => 'change_password', $user['id']), array('escapeTitle' => false)); ?></li>                        
                        <li class="divider"></li>
                        <li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-off"></i> Logout'), array('controller' => 'users', 'action' => 'logout'), array('escapeTitle' => false)) ?></li>  
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
        <?php endif; ?>
    </nav>
</div>