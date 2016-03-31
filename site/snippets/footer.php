				</main>
			</div>
		</section>

		<footer>
			<div class="row">
				<div class="large-8 small-12 columns categories">
				<ul>
				<?php foreach(page('shop')->Children()->limit(4) as $item): ?>
					<li>
						<a href="<?php echo $item->url() ?>">
							  <?php echo html($item->title()) ?>
						</a>
					</li>
				<?php endforeach ?>
				</ul>
				</div>
				<div class="large-4 small-12 columns social">
                    <?php snippet('sociallist') ?>

				</div>
			</div>
			<div class="row">

				<div class="large-3 medium-6 small-12 columns">

				</div>
				<div class="large-9 columns">
					
				</div>
			</div>
		</footer>

	  <!-- close the off-canvas menu -->
	  <a class="exit-off-canvas"></a>
  </div>
</div>

</body>



<script>
	$(function(){
	// Instantiate MixItUp:
	$('.productList').mixItUp({
		animation: {
			duration: 320,
			effects: 'fade stagger(34ms) scale(0.27) translateZ(80px) rotateX(90deg)',
			easing: 'cubic-bezier(0.445, 0.05, 0.55, 0.95)'
			}
		});
	});
	$(document).foundation({
		offcanvas : {
	    // [ move | overlap_single | overlap ]
	    open_method: 'overlap', 
	    close_on_click : false
	  }
	});
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
	});
	$(window).scroll(function() {    
		// header compressor
	    var scroll = $(window).scrollTop();
	    if (scroll >= 500) {
	        $("nav.top-bar").addClass("compressed");
	    }		    
	});
	$(function() {
	    //caches a jQuery object containing the header element
	    var header = $("nav.top-bar");
	    $(window).scroll(function() {
	        var scroll = $(window).scrollTop();

	        if (scroll >= 500) {
	            header.addClass("compressed");
	        } else {
	            header.removeClass("compressed");
	        }
	    });
	});

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-71167742-1', 'auto');
	ga('send', 'pageview');
</script>

</html>