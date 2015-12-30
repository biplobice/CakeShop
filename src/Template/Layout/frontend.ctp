<?php
$description = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $description ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('bootstrap-select.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('camera.css') ?>
    <?= $this->Html->css('style.css') ?>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700' rel='stylesheet' type='text/css'/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700' rel='stylesheet' type='text/css'/>

    <!--<?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>-->
</head>
<body>

<div class="page-container">
	<?= $this->element('header') ?>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
	<?= $this->element('footer') ?>
</div>




<!-- script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='js/jquery-1.10.2.min.js'><\/script>")</script -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/camera.js"></script>
<script type="text/javascript" src="js/sapphire.js"></script>
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
</body>
</html>
