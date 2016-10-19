<?php
/* Template Name: Prices */
?>
<?php get_header(); ?>

<div class="content-page">

     <section class="offer">
        <div class="content-md container">
            <div class="row margin-b-30">
                <div class="heading-v1 text-center margin-b-60">
                    <h2 class="heading-v1-title">What influences the order price?</h2>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box-v3 text-center">
                        <i class="icon-box-v3-icons icon-puzzle"></i>
                        <h3 class="icon-box-v3-title">Type of work</h3>
                        <p>Each type of service has different price. Editing is the cheapest one.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box-v3 text-center">
                        <i class="icon-box-v3-icons icon-documents"></i>
                        <h3 class="icon-box-v3-title">Number of pages</h3>
                        <p>The fewer pages you need, the lower the final price will be</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box-v3 text-center">
                        <i class="icon-box-v3-icons  icon-trophy"></i>
                        <h3 class="icon-box-v3-title">Academic level</h3>
                        <p>College and high school papers are cheaper than Ph.D. projects</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box-v3 text-center">
                        <i class="icon-box-v3-icons icon-hourglass"></i>
                        <h3 class="icon-box-v3-title">Deadline</h3>
                        <p>Order in advance and pay less for your paper</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="content-md container">
        <div class="container">
            <div class="row margin-b-30">
                <div class="col-xs-12">
                    <div class="heading-v1 text-center margin-b-60">
                        <h2 class="heading-v1-title">Our prices</h2>
                    </div>
                    <div data-crm-widget="prices"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-md container">
        <?php get_template_part('inc', 'guarantee'); ?>
    </div> 

    <?php get_template_part('inc', 'process'); ?>

</div>

<?php get_footer(); ?>
