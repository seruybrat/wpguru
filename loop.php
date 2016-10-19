<?php if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		if ( is_home() && !is_front_page() ) : ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
			    <h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="article-text text-justify">
					<?php the_excerpt(); ?>
				</div>
			</article>
			<?php else :
				the_content();
			?>
			<?php endif;
	endwhile;
endif; ?>
