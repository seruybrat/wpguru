<?php
$slider = is_front_page() ? 'id="samples_slider"' : false;

$samples = array(
	array(
		writer_name => 'Jason Miller',
		writer_level => 'MA, premium writer.',
		work_topic => 'Is it humanly to use animals for scientific research?',
		work_doctype => 'Essay',
		work_level => 'Collage',
		work_urgency => '3 hours',
		work_price => '$52.03',
		work_check_resource => 'Copyscape'
	),
	array(
		writer_name => 'Hilary Levy',
		writer_level => 'Ph.D., first-class writer',
		work_topic => 'How has the music industry been affected by the internet and digital downloading?',
		work_doctype => 'Term paper',
		work_level => 'Ph.D',
		work_urgency => '3 days',
		work_price => '$49.89',
		work_check_resource => 'Grammarly'
	),
	array(
		writer_name => 'Carol Schwimmer',
		writer_level => 'MBA, premium writer',
		work_topic => 'Microfinance in the UK banking industry',
		work_doctype => 'Dissertation',
		work_level => 'Master’s',
		work_urgency => '2 months',
		work_price => '$601.99',
		work_check_resource => 'Plagium'
	),
	array(
		writer_name => 'Richard Caver',
		writer_level => 'D.Sc., top writer.',
		work_topic => 'Volcano eruptions: causes and effects',
		work_doctype => 'Research paper',
		work_level => 'MHigh school',
		work_urgency => '48 hours',
		work_price => '$33.83',
		work_check_resource => 'Copyscape'
	),
	array(
		writer_name => 'Petra Hamilton',
		writer_level => 'D.Sc., premium writer',
		work_topic => 'Fiscal policy and its impact on economic crisis',
		work_doctype => 'Coursework',
		work_level => 'Master’s',
		work_urgency => '5 days',
		work_price => '$129.57',
		work_check_resource => 'Grammarly'
	),
	array(
		writer_name => 'Matthew Katz',
		writer_level => 'MEng, premium writer',
		work_topic => 'Obstacles in construction of high-speed rail',
		work_doctype => 'Research paper',
		work_level => 'Undergraduate',
		work_urgency => '7 days',
		work_price => '$83.79',
		work_check_resource => 'Copyscape'
	),
	array(
		writer_name => 'Melissa L. Martinez',
		writer_level => 'M.Sc., advanced writer',
		work_topic => 'Risk modelling and analysis',
		work_doctype => 'Statistics project',
		work_level => 'Undergraduate',
		work_urgency => '7 days',
		work_price => '$79.26',
		work_check_resource => 'Copyscape'
	),
	array(
		writer_name => 'Natalie Friedman',
		writer_level => 'M.D., first-class writer',
		work_topic => 'Barriers in adopting information technology in USA healthcare',
		work_doctype => 'Assignment',
		work_level => 'Master’s',
		work_urgency => '10 days',
		work_price => '$72.84',
		work_check_resource => 'Copyscape'
	),
	array(
		writer_name => 'Lee Stone',
		writer_level => 'Ph.D., premium writer',
		work_topic => 'Strategic management in HR',
		work_doctype => 'Thesis proposal',
		work_level => 'Ph.D.',
		work_urgency => '10 days',
		work_price => '$118.74',
		work_check_resource => 'Plagium'
	)/*,
	array(
		writer_name => 'Selena Mouly',
		writer_level => 'MBS, advanced writer',
		work_topic => 'Impact of climate change on human health',
		work_doctype => 'Essay',
		work_level => 'College',
		work_urgency => '24 hours',
		work_price => '$33.94',
		work_check_resource => 'Copyscape'
	)*/

); ?>

<section id="samples" class="samples">
	<div class="content-md container">
		<div class="heading-v1 text-center margin-b-80">
			<span class="heading-v1-title">Examples of works</span>
		</div>
		<div class="row">
			<div <?php echo $slider; ?> class="owl-carousel-testimonials-three-item margin-b-30 owl-theme">
				<?php foreach ($samples as $k => $item): ?>
					<div class="col-md-4 col-sm-6 col col-<?php echo ++$k; ?>">
						<div class="item item-<?php echo ++$k; ?>">
							<div class="testimonials">
								<div class="testimonials-body">
									<div class="testimonials-user-picture radius-circle"></div>
									<div class="testimonials-author"><?php echo $item[writer_name]; ?></div>
									<div class="testimonials-author-position"><?php echo $item[writer_level]; ?></div>
									<div class="testimonials-qd">
										<div class="testimonials-qd__inner">
											<div class="testimonials-quote"><span><?php echo $item[work_topic]; ?></span></div>
											<div class="testimonials-details">
												<span class="work-type"><?php echo $item[work_doctype]; ?>, </span>
												<span class="work-level"><?php echo $item[work_level]; ?></span>
											</div>
										</div>
									</div>
									<div class="row margin-b-20">
										<div class="col-xs-6 text-left">
											<span class="testimonials-urgency"><?php echo $item[work_urgency]; ?></span>
										</div>
										<div class="col-xs-6 text-right">
											<span class="testimonials-price"><?php echo $item[work_price]; ?></span>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6 text-left">
											<span class="testimonials-uniqueness">100% Uniqueness</span>
										</div>
										<div class="col-xs-6 text-right">
											<i class="fa fa-check"></i> <?php echo $item[work_check_resource]; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php if ( !is_page('samples')): ?>
			<div class="owl-control-arrows-v1 owl-controls-controls-work text-center">
	            <span id="owl-controls-work-prev">
	                <span class="owl-arrow radius-3 fa fa-angle-left"></span>
	            </span>
	            <span id="owl-controls-work-next">
	                <span class="owl-arrow radius-3 fa fa-angle-right"></span>
	            </span>
			</div>
		<?php endif ?>
	</div>
</section>