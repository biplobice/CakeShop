<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->Html->charset(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>eCommerce Admin Panel</title>
    
    <!--<script type="text/javascript">
        var BASEURL = '<?php //echo BASEURL; ?>'
        var IMAGEPATH = '<?php //echo BASEURL; ?>img/'
    </script>-->
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css( array(
        'bootstrap',
        'admin'
    ));
    echo $this->Html->script( array(
        'jquery.min',
        'bootstrap.min',
        'admin.scripts'
    ));
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->    
</head>

<body>
	<?= $this->element('Admin/navbar') ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="well">
                	<?= $this->element('Admin/leftbar') ?>
                </div>
            </div><!-- /.col-sm-3-->
            <div class="col-sm-9">
                <div class="well">
                    <?php //echo $this->Session->flash(); ?>
                    <?php echo $this->fetch('content'); ?>                    
                </div>
            </div><!-- /.col-sm-9-->
        </div><!-- /.row -->
    </div><!-- /.container-->
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="text-center">
                        &copy; <?php echo date( 'Y' ); ?> SmartMux, Dhaka, Bangladesh.                 
                </div>
            </div>
        </div>
    </footer>
    <?php //echo $this->element( 'sql_dump' ); ?>    
    
</body>
</html>