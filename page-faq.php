<?php
/* Template Name: FAQ */
?>
<?php get_header(); ?>
<?php if ($post->post_content != ''): ?>
<div id="block__text" class="content-page">
    <div class="content-md container">
        <div class="row">
            <div class="col-sm-12">
                <?php get_template_part('loop'); ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>