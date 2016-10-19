<?php $services_slider = array(
	array(
		title => "High priority order",
		text => "slide-block1.png",
		img => "screen-1.gif",
		price => "9.99"
	),
	array(
		title => "TOP Writer",
		text => "slide-block2.png",
		img => "screen-2.gif",
		price => "cost + 30%"
	),
	array(
		title => "Plagiarism Report",
		text => "slide-block3.png",
		img => "screen-3.gif",
		price => "14.99"
	),
	array(
		title => "SMS inform",
		text => "slide-block4.png",
		img => "screen-4.gif",
		price => "3.99"
	),
	array(
		title => "1-page summary",
		text => "slide-block5.png",
		img => "screen-5.gif",
		price => "24.99"
	),
	array(
		title => "Double check",
		text => "slide-block6.png",
		img => "screen-7.png",
		price => "Extra charge"
	),
);?>

<!--SERVICES-SLIDER-->
<div class="abcp_services-slider">
			<div class="col-sm-7 col-md-8">
				<ul id="services_slider_1" class="abcp_services-slider-1">
				<?php foreach ($services_slider as $k => $item) : ?>
					<li class="abcp_services-slider-1__slide abcp_services-slider-1__slide-<?php echo ++$k; ?>">
						<div class="abcp_services-slider-1__image">
							<img src="<?php bloginfo('template_url'); ?>/images/<?php echo $item[img]; ?>" alt="<?php echo $item[title]; ?>" />
						</div>
					</li>
				<?php endforeach; ?>
				</ul>
			</div>
			<div class="col-sm-5 col-md-4">
				<ul id="services_slider_2" class="abcp_services-slider-2">
				<?php foreach ($services_slider as $k => $item) : ?>
					<li class="abcp_services-slider-2__slide abcp_services-slider-2__slide-<?php echo ++$k; ?>">
						<div class="abcp_services-slider__content">
							<?php if (0) : // hidden text ?>
								<div class="abcp_services-slider-2__title"><?php echo $item[title]; ?></div>
								<div class="abcp_services-slider-2__text"><?php echo $item[text]; ?></div>
								<div class="abcp_services-slider-2__price"><?php if ($k !== 2 && $k !== 6) echo '$'; ?><span><?php echo $item[price]; ?></span></div>
							<?php endif; // end hidden text ?>
							<div class="abcp_services-slider-2__img-text"><img src="<?php bloginfo('template_url'); ?>/images/<?php echo $item[text]; ?>" alt="<?php echo $item[title]; ?>" /></div>
						</div>
					</li>
				<?php endforeach; ?>
				</ul>
			</div>
	<div id="services_slider_controls" class="abcp_services-slider__pagination"></div>
</div>
