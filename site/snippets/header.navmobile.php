<nav class="menu__mobile">
    <?php foreach($pages->visible() as $p) { ?>
        <a <?php e($p->isOpen(), 'class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    <?php } ?>
    <!-- Cart -->
    <a class="cartStatus button tiny" href="<?php echo url('shop/cart') ?>" title="View cart">
        <?php
            $cart = Cart::getCart();
            $count = $cart->count();
        ?>
        <i class="fa fa-shopping-cart"></i>    	
        <span><?php echo $count ?> item<?php if ($count > 1 || $count === 0) echo 's' ?></span>
    </a>
</nav>