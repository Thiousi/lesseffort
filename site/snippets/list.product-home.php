<?php if(count($products) or $products->count()) { ?>
	<div class="row productList">
	  <?php foreach($products as $product): ?>

		  <div class="small-12 medium-6 large-3 columns">

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
		    		<?php
		    			$variants = $product->variants()->yaml();
		    			foreach ($variants as $key => $variant) $pricelist[] = $variant['price'];
		    			$priceFormatted = formatPrice(min($pricelist));
		    			if (count($variants) > 1) $priceFormatted = 'From '.$priceFormatted;
					?>
					<div class="productOverlay">
							<span class=""><?php echo $priceFormatted ?></span>
							<a class="view" href="<?php echo $product->url() ?>">VIEW ITEM</a>
					</div>
			</a>
		</div>

	  <?php endforeach ?>
	  		</div>
<?php } ?>
