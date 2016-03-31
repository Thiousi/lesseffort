<h1 class="logo">

    <a href="<?php echo $site->url() ?>">
    <?php
        // Convert the filename to a full file object
        $logo_filename = page('home')->logo();
        $logo = page('home')->files()->find($logo_filename);
    ?>
        <img src="<?php echo $site->url() ?>/assets/img/logo-full.svg" title="<?php echo $site->title() ?>" class="full"/>
        <img src="<?php echo $site->url() ?>/assets/img/logo-leaf.svg" title="<?php echo $site->title() ?>" class="leaf"/>
    </a>
</h1>