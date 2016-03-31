
<?php snippet('header') ?>
<div class="wrapper row">
<section role="main" class="scroll-container">
		<main class="row">
		
		<h2 class="no-span"><?php echo $page->title()->html() ?></h2>

		<?php echo $page->text()->kirbytext() ?>


      <div class="large-4 large-offset-4 small-12 columns">
        <form method="post">
        <?php if($alert): ?>
        <div class="alert">
          <ul>
            <?php foreach($alert as $message): ?>
            <li><?php echo html($message) ?></li>
            <?php endforeach ?>
          </ul>
        </div>
        <?php endif ?>

        <div class="field">
          <label for="name">Name <abbr title="required">*</abbr></label>
          <input type="text" id="name" name="name">
        </div>

        <div class="field">
          <label for="email">Email <abbr title="required">*</abbr></label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="field">
          <label for="text">Text <abbr title="required">*</abbr></label>
          <textarea id="text" name="text" required></textarea>
        </div>
        
        <input type="submit" name="submit" value="Submit" class="small-12">

      </form>


    </div>

<?php snippet('footer') ?>