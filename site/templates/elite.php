<?php snippet('header') ?>
<div class="wrapper row elitePage">
<section role="main" class="scroll-container">
		<main class="row">
		
		<h2 class="no-span"><?php echo $page->title()->html() ?></h2>



<div class="row elite">
    <h3>FOUNDERS</H3>
    <?php foreach($files = $page->files()->filterBy('filename', '*=', 'founder-') as $image): ?>
      <div class="large-3 medium-6 small-12 columns">
        <img src="<?php echo $image->url() ?>" alt="">
        <div class="eliteOverlay">
          <h3><?php echo $image->Title() ?></h3>
        </div>
      </div>
    <?php endforeach ?>
</div>

<div class="row elite">
    <h3>BMX</H3>
    <?php foreach($files = $page->files()->filterBy('filename', '*=', 'bmx-') as $image): $index++; ?>
      <div class="large-3 medium-6 small-12 columns">
        <img src="<?php echo $image->url() ?>" alt="">
        <div class="eliteOverlay">
          <h3><?php echo $image->Title() ?></h3>
        </div>
      </div>
    <?php endforeach ?>
</div>

<div class="row elite">
    <h3>PHOTOGRAPHERS</H3>
    <?php foreach($files = $page->files()->filterBy('filename', '*=', 'photo-') as $image): ?>
      <div class="large-3 medium-6 small-12 columns">
        <img src="<?php echo $image->url() ?>" alt="">
        <div class="eliteOverlay">
          <h3><?php echo $image->Title() ?></h3>
        </div>
      </div>
    <?php endforeach ?>
</div>
<!--
<div class="row elite">
    <h3>MOUNTAIN BIKE</H3>
    <?php foreach($files = $page->files()->filterBy('filename', '*=', 'mtb-') as $image): ?>
      <div class="large-3 medium-6 small-12 columns">
        <img src="<?php echo $image->url() ?>" alt="">
        <div class="eliteOverlay">
         <h3><?php echo $image->Title() ?></h3>
       </div>
      </div>
    <?php endforeach ?>
</div>
-->
<div class="row elite">
    <h3>MUSIC</H3>
    <?php foreach($files = $page->files()->filterBy('filename', '*=', 'music-') as $image): ?>
      <div class="large-3 medium-6 small-12 columns">
        <img src="<?php echo $image->url() ?>" alt="">
        <div class="eliteOverlay">
        <h3><?php echo $image->Title() ?></h3>
        </div>
      </div>
    <?php endforeach ?>
</div>

<div class="row elite">
    <h3>FAMILY</H3>
    <?php foreach($files = $page->files()->filterBy('filename', '*=', 'fam-') as $image): ?>
      <div class="large-3 medium-6 small-12 columns">
        <img src="<?php echo $image->url() ?>" alt="">
          <div class="eliteOverlay">
            <h3><?php echo $image->Title() ?></h3>
          </div>
      </div>
    <?php endforeach ?>
</div>

</div>

<?php snippet('footer') ?>