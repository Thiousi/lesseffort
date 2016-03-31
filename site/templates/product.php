<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<div class="wrapper row">
		
			<section class="product-detail clearfix">
				
				<!--gallery -->
				<div class="small-12 medium-6 large-6 columns">
					<?php snippet('product.gallery') ?>
				</div>

				<!--variants -->


				<div class="small-12 medium-6 large-6 columns">

					<!--text -->
					<section>
					<h1><?php echo $page->title()->html() ?></h1>
						<?php echo $page->text()->kirbytext() ?>

						<!--<?php $tags = str::split($page->tags()) ?>
						<?php if (count($tags)) { ?>
							<p>
								<?php foreach ($tags as $tag) { ?>
									<a href="<?php echo $site->url().'/search/?q='.urlencode($tag) ?>">#<?php echo $tag ?></a>
								<?php } ?>
							</p>
						<?php } ?>-->
					</section>



							


					<?php $variants = $page->variants()->toStructure() ?>

					<?php if (count($variants)) { ?>
						<section class="variants small-12 medium-12 large-8 large-offset-2 columns">
							<?php foreach ($variants as $variant) { ?>
								<div>

						            <form class="uk-form uk-panel uk-panel-box" method="post" action="<?php echo url('shop/cart') ?>">

										<?php ecco(trim($variant->description()) != '',$variant->description()->kirbytext()) ?>

						                <input type="hidden" name="action" value="add">
						                <input type="hidden" name="uri" value="<?php echo $page->uri() ?>">
						                <input type="hidden" name="variant" value="<?php echo str::slug($variant->name()) ?>">

										<?php $options = str::split($variant->options()) ?>
										<?php if (count($options)) { ?>
											<select class="uk-width-1-1" name="option">
												<?php foreach ($options as $option) { ?>
													<option value="<?php echo str::slug($option) ?>"><?php echo str::ucfirst($option) ?></option>
												<?php } ?>
											</select>
										<?php } ?>

										<?php if (inStock($variant)) { ?>
	<button class="" type="submit"><span><?php echo $variant->name() ?></span> - <?php echo formatPrice($variant->price()->value) ?></button>
										<?php } else { ?>
	<button class="" disabled><?php echo l::get('out-of-stock') ?> <?php echo formatPrice($variant->price()->value) ?></button>
										<?php } ?>
										
						            </form>
								</div>
							<?php } ?>
						</section>
					<?php } ?>
				</div>

			

		<!-- Related products -->
		<?php
			$index = $pages->index();
			$products = [];
			foreach ($page->relatedproducts()->toStructure() as $slug) {
				$product = $index->findByURI($slug->product());
				if($product->isVisible()) {
					$products[] = $product;
				}
			}
		?>
		<?php if (count($products)) { ?>
			<section class="related large-12 columns">
				<h2 class="no-span"><?php echo l::get('related-products') ?></h2>
				<?php snippet('list.product',['products' => $products]) ?>
			</section>
		<?php } ?>
</div>
<?php snippet('footer') ?>