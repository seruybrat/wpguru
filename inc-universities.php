<?php $univerQuantity = 12; // logos quantity ?>

<section class="universities">
	<div class="content-xs container">
		<div class="owl-carousel-universities-six-item owl-carousel owl-theme">
			<?php for ($i=1; $i <= $univerQuantity ; $i++) { ?>
				<div class="item">
					<img src="<?php bloginfo('template_url'); ?>/images/univercities/univercity__<?php echo $i; ?>.png" alt="">
				</div>
			<?php } ?>
		</div>
	</div>
</section>