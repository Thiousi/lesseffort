<?php snippet('header') ?>
<div class="wrapper row">
<section role="main" class="scroll-container">
		<main class="row">
			<div class="large-8 large-centered columns blogpostFull">
			  <?php foreach($page->images() as $image): ?>
			      <img src="<?php echo $image->url() ?>" alt="">
			  <?php endforeach ?>
				<h2 class="no-span"><?php echo $page->title()->html() ?></b></h2>

				<?php echo $page->text()->kirbytext() ?>
						<?php $tags = str::split($page->tags()) ?>
						<?php if (count($tags)) { ?>
							<p class="blogTags">
								<?php foreach ($tags as $tag) { ?>
									#<?php echo $tag ?>
								<?php } ?>
							</p>
						<?php } ?>

					<div class="blogMeta row">
						<div class="columns large-3 small-6 prev">
							<?php if($page->hasPrevVisible()): ?>
								<a class="prev" href="<?php echo $page->prevVisible()->url() ?>">Previous article</a>
							<?php endif ?>
							&nbsp;
						</div>
						<div class="columns large-3 small-6">
							<a class="tweet" href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('via @your_account')?>" target="blank" title="Tweet this">Tweet</a>
						</div>
						<div class="columns large-3 small-6">
							<a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url()); ?>" target="blank" title="Share on Facebook">Facebook</a>
						</div>
						<div class="columns large-3 small-6 next">
							&nbsp;
							<?php if($page->hasNextVisible()): ?>
								<a class="next" href="<?php echo $page->nextVisible()->url() ?>">Next article</a>
							<?php endif ?>
						</div>
					</div>



		  	</div>

</main>
</section>




<?php snippet('footer') ?>