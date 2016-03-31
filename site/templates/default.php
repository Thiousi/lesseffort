<?php snippet('header') ?>
<div class="wrapper row">
<section role="main" class="scroll-container">
		<main class="row">
		
		<h2 class="no-span"><?php echo $page->title()->html() ?></h2>

		<?php echo $page->text()->kirbytext() ?>

<?php snippet('footer') ?>