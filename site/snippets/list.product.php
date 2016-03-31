<?php if(count($products) or $products->count()) { ?>
	<div class="row productList">
	  <?php foreach($products as $product): ?>

		  <div class="mix small-12 medium-6 large-3 columns <?php echo $product->parent()->title() ?> <?php echo $product->Soldout()->html() ?>">

			<a href="<?php echo $product->url() ?>">
				<?php 
					if ($product->hasImages()) {
						$image = $product->images()->sortBy('sort', 'asc')->first();
					} else {
						$image = $site->images()->find($site->placeholder());
					}
					$thumb = thumb($image,array('height'=>400));
				?>
					<img src="<?php echo $thumb->dataUri() ?>" title="<?php echo $product->title() ?>">

					<h3><?php echo $product->title()->html() ?></h3>

			    		<?php
			    			$variants = $product->variants()->yaml();
			    			foreach ($variants as $key => $variant) $pricelist[] = $variant['price'];
			    			$priceFormatted = formatPrice(min($pricelist));
						?>

					<div class="productOverlay">
							<!--<span class=""><?php echo $priceFormatted ?></span>-->
							<span class="soldout">sold out</span>
							<a class="view" href="<?php echo $product->url() ?>">VIEW ITEM</a>
					</div>
			</a>
		</div>

	    <?php endforeach ?>
	</div>
<?php } ?>
