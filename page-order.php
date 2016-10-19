<?php
/* Template Name: Order */

get_header(); ?>
<div class="content-page order">
    <div class="content-md order container">
        <div class="row">
            <div class="col-sm-12">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content('<p>Read more &raquo;</p>'); ?>
                    <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>