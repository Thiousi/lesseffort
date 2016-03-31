<nav class="menu">
    <?php foreach($pages->visible()->not('home') as $p) { ?>
        <a <?php e($p->isOpen(), 'class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    <?php } ?>
</nav>