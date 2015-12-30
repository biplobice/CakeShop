<ul class="nav nav-list"> 
  <li class="nav-header">Admin Menu</li>        
  <li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-list-alt"></i> Categories'), array('controller' => 'Categories', 'action' => 'index'), array('escapeTitle' => false)) ?></li>    
  <li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-list-alt"></i> Sub Categories'), array('controller' => 'SubCategories', 'action' => 'index'), array('escapeTitle' => false)) ?></li>    
  <li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-list-alt"></i> Products'), array('controller' => 'Products', 'action' => 'index'), array('escapeTitle' => false)) ?></li>
  <li class="divider"><hr></li>
  <li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-cog"></i> Settings'), array('action' => 'Settings'), array('escapeTitle' => false)) ?></li>  
  <li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-off"></i> Logout'), array('controller' => 'users', 'action' => 'logout'), array('escapeTitle' => false)) ?></li>  
</ul>
