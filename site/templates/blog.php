<?php snippet('header') ?>

<!--<div id="filters">
  <div class="row">
    <div class="large-12 columns">
      <h4>Filters</h4>
          <?php
          // fetch all tags
          $tags = $page->children()->visible()->pluck('tags', ',', true);
          ?>

          <ul class="tags">
            <?php foreach($tags as $tag): ?>
            <li>
              <a href="<?php echo url('blog/tag:' . $tag)?>">
                <?php echo html($tag) ?>
              </a>
            </li>
            <?php endforeach ?>
          </ul>

    </div>
  </div>
</div>-->
<div class="wrapper row">
<section role="main" class="scroll-container">
		<main class="row">
	
    <?php foreach($page->children() as $subpage): ?>
      <div class="large-8 large-centered columns blogpostSnippet">

      <?php foreach($subpage->images() as $image): ?>
        <a href="<?php echo $subpage->url() ?>">
          <img src="<?php echo $image->url() ?>" alt="">
        </a>
      <?php endforeach ?>

          <h2 class="no-span"><a href="<?php echo $subpage->url() ?>">
            <?php echo html($subpage->title()) ?>
          </a></h2>
          <?php echo html($subpage->text()->markdown()->excerpt(300)) ?>
          <span><a class="view" href="<?php echo $subpage->url() ?>">Read More...</a></span>
      </div>
    <?php endforeach ?>

<?php snippet('footer') ?>