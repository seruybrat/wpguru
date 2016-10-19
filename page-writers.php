<?php
/* Template Name: Writers */
?>
<?php get_header(); ?>

<div class="content-page">

    <?php get_template_part('inc', 'talented'); ?>

    <?php get_template_part('inc', 'employee'); ?>

    <?php get_template_part('inc', 'testimonials'); ?>

 	<ul>
	    <?php wp_list_categories( array(
	        'orderby' => 'name',
	        'include' => array( 5, 6 )
	    ) ); ?> 
	</ul>

</div>

<?php get_footer(); ?>
