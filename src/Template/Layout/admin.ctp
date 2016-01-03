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
        'admin',
        'font-awesome'
    ));
    echo $this->Html->script( array(
        'jquery.min.js',
        'bootstrap.min',
        //'admin.scripts'
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
	
    <div id="wrapper">
	<?= $this->element('Admin/navbar') ?>



        <div id="page-wrapper">

            <div class="container-fluid">
                    <?php //echo $this->Session->flash(); ?>
                    <?php echo $this->fetch('content'); ?>       


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	

    
    <footer>
        <div class="container">
            <div class="row">
                <div class="text-center">
                        &copy; <?php echo date( 'Y' ); ?> Biplob, Tokyo, Japan.                 
                </div>
            </div>
        </div>
    </footer>
    <?php //echo $this->element( 'sql_dump' ); ?>    
    
</body>
</html>