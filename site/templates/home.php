<?php snippet('header') ?>
    <?php echo js('assets/js/jssor.slider.mini.js') ?>


<div class="wrapper row">
<section role="main" class="scroll-container">
  <main class="row home">


    <section class="slider">
        <div id="slider" style="position: relative; top: 0px; left: 0px; right: 0px; width: 1240px; height: 467px;">
            <!-- Slides Container -->
            <div u="slides" class="slides" style="cursor: move; position: absolute; overflow: hidden; width: 1240px; left: 0px; top: 0px; right: 0px; height: 467px;">
                <?php $n=0; foreach($page->images() as $image): $n++; ?>
                    <div><a href="<?php echo $image->link()->escape() ?>"><img u="image" src="<?php echo $image->url() ?>" title="<?php echo $image->title() ?>"/></a></div>
                <?php endforeach ?>
            </div>

                    <!-- Arrow Left
        <span u="arrowleft" class="jssora01l">
            <i class="fa fa-angle-left"></i>
        </span> -->
        <!-- Arrow Right 
        <span u="arrowright" class="jssora01r">
            <i class="fa fa-angle-right"></i>
        </span>-->
        </div>
    </section>
		
		<?php echo $page->text()->kirbytext() ?>
    <section class="front-images">
        <div class="row " data-equalizer>
            <div class="large-7 medium-7 columns abovebelow" data-equalizer-watch>
                <div class="image">
                <h3><a href="shop/Tshirts/above-below-pack">above & below</a></h3>
                </div>
            </div>        
            <div class="large-5 medium-5 columns" data-equalizer-watch>
                <div id="socialFront">
                    <h3>Signup</h3>
                    <p>Sign up to our newsletter for offers, exclusives and free music!</p>
                    <?php snippet('mailchimp') ?>
                    <?php snippet('sociallist') ?>
                </div>
            </div>
        </div>
    </section>

    <section class="related">
        <h2 class="no-span">New Products</b></h2>
        <?php
          $index = $pages->index();
          $products = [];
          foreach ($page->relatedproducts()->toStructure() as $slug) {
            $product = $index->findByURI($slug->product());
            if($product->isVisible()) {
              $products[] = $product;
            }
          }
        ?>
        <?php if (count($products)) { ?>
            <?php snippet('list.product',['products' => $products]) ?>
        <?php } ?>
    </section>

    <section class="blog-home">
    <h2 class="no-span">Latest blog post</b></h2>
        <?php foreach(page('blog')->Children()->limit(1) as $item): ?>

        <div class="row">
            <div class="large-4 columns">
                  <?php foreach($item->images() as $image): ?>
                    <a href="<?php echo $item->url() ?>">
                      <img src="<?php echo $image->url() ?>" alt="">
                    </a>
                  <?php endforeach ?>
            </div>

            <div class="large-8 columns">
                <h3><a href="<?php echo $item->url() ?>">
                    <?php echo html($item->title()) ?>
                </a></h3>
              <?php echo html($item->text()->excerpt(300)) ?>
            </div>

            <div class="large-12 columns">
              <a class="view" href="<?php echo $item->url() ?>">View Post</a>
            </div>

        </div>
        <?php endforeach ?>
    </section>

    <section class="instagram">
        <h2 class="no-span">Instagram</b></h2>
        <?
          $instagram = new \Instagram();?>
        <ul>
        <? foreach($instagram->feed()->limit(8)->get() as $image): ?>   
            <li><a href="<?= $image->link() ?>" target="_blank">
            <img src="<?= $image->thumbnail() ?>" />
            </a>
            </li>
        <? endforeach; ?>
        </ul>
    </section>
<script type="text/javascript">
        jQuery(document).ready(function ($) {
        // Define an array of slideshow transition code
        var _SlideshowTransitions = [
    {$Duration:700,$Opacity:2,$Brother:{$Duration:1000,$Opacity:2}}
        ];
        var options = {
            $AutoPlay: true,
            $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: _SlideshowTransitions,
                    $TransitionsOrder: 1,
                    $ShowLink: true
                }
    };
    var jssor_slider1 = new $JssorSlider$('slider', options);
        //responsive code
        function ScaleSlider() {
            var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
            if (parentWidth) {
                jssor_slider1.$ScaleWidth(parentWidth - 0);
            }
            else
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
    
</script>
<?php snippet('footer') ?>