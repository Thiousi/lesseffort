<?php 
	$categories = $page->children()->visible()->filterBy('template','category');
	$products = $page->grandchildren()->visible()->filterBy('template','product');
	
	// If there's only one product in a category, skip directly to the product page
	if ($categories->count() == 0 and $products->count() == 1) {
		go($products->first()->url());
	}
?>

<?php snippet('header') ?>

<div id="filters">
	<div class="row">
		<div class="large-12 columns">
				<div class="filter__title">Filter</div>
				<div class="filter" data-filter="all">Show All</div>
				<div class="filter" data-filter=".Tshirts">Shirts</div>
				<div class="filter" data-filter=".Sweatshirts">Sweaters</div>
				<div class="filter" data-filter=".Headwear">Headwear</div>
				<div class="filter" data-filter=".Accessories">Accessories</div>
		</div>
	</div>
</div>

<div class="wrapper row">
<section role="main" class="scroll-container product__margin">
		<?php if($photo = $page->images()->sortBy('sort', 'asc')->first()) { ?>
			<img src="<?php echo thumb($photo,array('height'=>300, 'quality'=>99))->dataUri() ?>" class="<?php echo $photo->filename() ?>" title="<?php echo $photo->title() ?>"/>
		<?php } ?>
		<?php echo $page->text()->kirbytext() ?>
		<?php snippet('list.product', ['products' => $products]) ?>

<?php snippet('footer') ?>