<?php if($categories->count()) { ?>
	<ul class="listing uk-container uk-padding-remove">
	  <?php foreach($categories as $category): ?>
	  	<li class="">
	  		<a href="<?php echo $category->url() ?>">
		  		<?php 
		  			if ($category->hasImages()) {
		  				$image = $category->images()->sortBy('sort', 'asc')->first();
		  			} else {
		  				$image = $site->images()->find($site->placeholder());
		  			}
		  			$thumb = thumb($image,array('height'=>150));
		  		?>

				
		        <span><?php echo $category->title()->html() ?></span>

			</a>
	    </li>
	  <?php endforeach ?>
	</ul>
<?php } ?>