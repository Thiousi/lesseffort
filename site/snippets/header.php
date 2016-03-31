<!DOCTYPE html>
<html lang="<?php echo $site->language() ?>">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?php echo $site->title()->html() ?> | <?php echo $page->SEOtitle()->html() ?></title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.topbar.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.offcanvas.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.equalizer.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700,300,300italic' rel='stylesheet' type='text/css'>

	<?php echo js('assets/js/jquery.mixitup.min.js') ?>
	<?php echo css('assets/css/shopkit.css') ?>
	<?php echo css('assets/css/base.css') ?>
	<?php echo css('assets/css/demo.css') ?>

	<meta name='description' content='<?php echo $page->SEOdesc() ?>' />

</head>
<body class="<?php echo $page->title() ?>">

<div class="off-canvas-wrap" data-offcanvas>

	<div class="inner-wrap">
	    <!-- Off Canvas Menu -->
	    <aside class="left-off-canvas-menu">
			<?php snippet('header.navmobile') ?>
	    </aside>

			<div class="contain-to-grid fixed">
				  <nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
					    <?php snippet('logo') ?>
					    <?php snippet('header.nav') ?>
					    <?php snippet('header.cart') ?>
				  </nav>				  
				  <nav class="mobile" data-topbar role="navigation">
					  	<a href="<?php echo $site->url() ?>">
					  		<img src="<?php echo $site->url() ?>/assets/img/logo-leaf.svg" title="<?php echo $site->title() ?>" class="leafMobile"/>
					  	</a>
					    <?php snippet('header.cart') ?>
					    <a class="left-off-canvas-toggle" href="#">
					    	<div id="nav-icon3">
							  <span></span>
							  <span></span>
							  <span></span>
							  <span></span>
							</div>
					    </a>
				  </nav>
			</div>