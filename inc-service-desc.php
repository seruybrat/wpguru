<?php
$basic_services = array(
	"fast-turnaround",
	"authomated-writer-assigning",
	"direct-communication",
	"free-online-support",
	"full-compliance",
	"free-qad-check",
	"free-title",
	"spacing",
	"plagiarism-check",
);
$additional_services = array(
	array (
		item => "top-writer",
		price => "cost +30%"
	),
	array (
		item => "plagiarism-report",
		price => "$14,99"
	),
	array (
		item => "high-priority-order",
		price => "$9,99"
	),
	array (
		item => "one-page-summary",
		price => "$24.99"
	),
	array (
		item => "extra-qad-check",
		price => "Extra charge"
	),
	array (
		item => "sms-updates",
		price => "$3,99"
	)
);
?>

<!--SERVICE INCLUDE-->
<section class="abcp_service-desc">
	<div class="section-title">
		<div class="container">Our service include</div>
	</div>
	<div class="container abcp_service-desc__wrap">
		<div class="row equal-cols">
			<div class="col-md-6">
				<!--BASIC SERVICES-->
				<div class="abcp_service-desc__block abcp_service-desc__basic">
					<div class="abcp_service-desc__title"><img src="<?php bloginfo('template_url');?>/img/services-desc/basic-services.png" alt="" /></div>
					<div class="abcp_service-desc__list custom-list">
						<ul>
							<?php foreach ($basic_services as $k => $item): ?>
								<li>
									<img src="<?php bloginfo('template_url');?>/img/services-desc/<?php echo $item; ?>.png" alt="" />
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="abcp_service-desc__basic-price-block">
						<div class="abcp_service-desc__basic-text"><img src="<?php bloginfo('template_url');?>/img/services-desc/price-from.png" alt="" /></div>
						<div class="abcp_service-desc__basic-price">$10</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<!--ADDITIONAL SERVICES-->
				<div class="abcp_service-desc__block abcp_service-desc__additional">
					<div class="abcp_service-desc__title"><img src="<?php bloginfo('template_url');?>/img/services-desc/additional-services.png" alt="" /></div>
					<div class="abcp_service-desc__list custom-list">
						<ul>
							<?php foreach ($additional_services as $k => $item): ?>
								<li>
									<span class="abcp_service-desc__text"><img src="<?php bloginfo('template_url');?>/img/services-desc/<?php echo $item[item]; ?>.png" alt="" /></span>
									<span class="abcp_service-desc__price"><?php echo $item[price]; ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="abcp_service-desc__additional-info">
						 <img src="<?php bloginfo('template_url');?>/img/services-desc/additional-services-text.png" alt="" />
					</div>
				</div>
			</div>
		</div>
		<div class="big-btn-wrap">
			<a href="/order" class="btn btn-default big-btn">Order now</a>
		</div>
	</div>
</section>
