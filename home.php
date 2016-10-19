<?php get_header(); ?>
	<div class="light-gray">
    	<div class="container content-sm">
    		<h1 class="page-title">Blog</h1>
    		<div class="row">
	    		<div class="col-md-9">
					<?php get_template_part('loop'); ?>
					<?php
						the_posts_pagination(array(
							'show_all' => true,
							'end_size' => 2,
							'mid_size' => 2,
							'prev_next' => true,
							'prev_text' => __('Prev'),
							'next_text' => __('Next')
						));
					?>
	    		</div>
	    		<div class="col-md-3">
					<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
						<div id="sidebar">
							<?php dynamic_sidebar( 'sidebar' ); ?>
						</div>
					<?php endif; ?>
	    		</div>
    		</div>
		</div>
	</div>
<?php get_footer(); ?>