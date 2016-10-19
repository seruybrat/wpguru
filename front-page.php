<?php
/* Template Name: Front page */
?>
<?php get_header(); ?>

    <script type="text/javascript">
        var sheet = document.createElement('style');
        sheet.innerHTML = "#block__text {display:block}";
        document.head.appendChild(sheet);
    </script>



    <div class="block__elements">
        <?php get_template_part('inc', 'promo'); ?>

        <section class="container block-section">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <header class="block-section__header block-section__header--1 margin-b-40">
                        Get to know more about our writing services! 
                    </header>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3 choose__item">
                    <header class="choose__item__title">Dissertation writing</header>
                    <div class="choose__item__img">
                        <img class="img-responsive"
                             src="<?php echo get_template_directory_uri() . '/images/services__img__dissertation.jpg' ?>"
                             alt="">
                    </div>
                    <div class="choose__item__text">Do you need your first chapter or the whole paper? We can write both! We specialize in writing quality dissertations on a variety of complex topics. Unique high-quality dissertation is guaranteed.
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 choose__item">
                    <header class="choose__item__title">Research papers</header>
                    <div class="choose__item__img">
                        <img class="img-responsive"
                             src="<?php echo get_template_directory_uri() . '/images/services__img__research.jpg' ?>"
                             alt="">
                    </div>
                    <div class="choose__item__text">Writing research papers demands your utmost dedication and error-free research. Select our services as we are prompt and experienced. Submit instructions for your paper now to get started!
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 choose__item">
                    <header class="choose__item__title">Editing & proofreading</header>
                    <div class="choose__item__img">
                        <img class="img-responsive"
                             src="<?php echo get_template_directory_uri() . '/images/services__img__editing.jpg' ?>"
                             alt="">
                    </div>
                    <div class="choose__item__text">You finished your dissertation on your own. But it requires polishing up to exclude any chance of errors, spelling mistakes or formatting issues. As a result of our help you will get an absolutely perfect paper!
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 choose__item">
                    <header class="choose__item__title">Custom essays</header>
                    <div class="choose__item__img">
                        <img class="img-responsive"
                             src="<?php echo get_template_directory_uri() . '/images/services__img__essays.jpg' ?>"
                             alt="">
                    </div>
                    <div class="choose__item__text">If you require a customized essay to suit your unique writing challenges, we can provide you with fast and professional solutions. Leave us your instructions to get an excellent piece of writing on time.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <a href="/services" class="btn btn-default btn-more">View more ></a>
                </div>
            </div>
        </section>

        <?php get_template_part('inc', 'choose-service'); ?>
        <?php get_template_part('inc', 'our-strategy'); ?>
        <?php get_template_part('inc', 'employee'); ?>
        <?php 
            function adv_title() {
                echo "50+ advanced writing services of GuruDissertation are at your disposal!";
            };
    
            get_template_part('inc', 'adv-writing'); 
        ?>
        <?php get_template_part('inc', 'number-clients'); ?>
        <?php get_template_part('inc', 'slider'); ?>
        <?php get_template_part('inc', 'examples'); ?>
        <?php get_template_part('inc', 'testimonials-slider'); ?>

        <?php if ($post->post_content != ''): ?>
    <div id="block__text" class="container-on-main">
        <div class="container content-sm">
            <?php get_template_part('loop'); ?>

            <?php /*
            <header class="stripped">
<div style="display: inline-block"  class="stripped__inner">
<h1>Your faithful personal custom dissertation assistant</h1>
</div>
</header>

<p>They say slow and steady wins the race. But what if you were working so slow on your dissertation that it turned into a complete nightmare with a deadline in just a week or two? Now that you have been introduced to our dissertation help online, you can sigh with relief and lose the pressure of a tight deadline. So, assuming that there is a fat chance for you to write a dissertation on your own, simply opt for the dissertation gurus!</p>
<p>Quality dissertation is not a problem anymore. Dissertation writing services that we provide expand the horizon of ordinary dissertation writing. Not only you can get it in the nick of time, but rely on the highest possible quality of dissertation. To clear up all the doubts, be assured that your dissertation will be written by one of PhD holders, so your PhD dissertation is in safe hands. So if you didn’t do the stroke of work on your dissertation, farm the job out to our equipped and skillful experts.</p>

<section class="clearfix">
<img class="pull-right" src="/wp-content/uploads/2015/03/2.png" alt="" />
<h2>Check our benefits to dissipate last bits of a doubt:</h2>

<ul>
<li>Solely native English-speaking writers who have gone through the necessary training to fill the vacancy of your dissertation writer</li>
<li>Our MBA dissertation help is carried out by highly educated writers who can handle dissertations in any subjects</li>
<li>On-time and scheduled delivery for every dissertation chapter</li>
<li>Immediate response each time you need to contact your writer right after you buy dissertations online</li>
</ul>
</section>

<section class="clearfix">
<img class="pull-left" src="/wp-content/uploads/2015/03/1.png" alt="" />
<h2>Ease your college life with GuruDissertation</h2>

<p>Lean back and relax while your dissertation is being worked on. We assure that as a result you will get an excellent dissertation service. Our help with dissertation writing includes writing of any chapter, proposal writing, editing and proofreading of your own dissertation. Once your paper is completely ready, you will be able to download it from your page.</p>
<p>We made sure you have just the quality you are looking for. Therefore, when you buy a dissertation, you have a month of free revisions. Just ask the writer to do all the corrections need and enjoy the quality!</p>
</section>

<section>
<header class="stripped">
<div style="display: inline-block"  class="stripped__inner"><h2>Choose No. 1 dissertation writing service</h2></div>
</header>

<p>We clearly understand that finding a reliable company to buy dissertation online is one of the greatest decisions you have to make. Being one of the most experienced dissertation services with a commitment to quality and serious attitude to the dissertation writers choosing, we’ve earned the trust of students from all around the world. Due to this, you can feel safe when ordering professional dissertation writing help from our service. When it comes to writing a dissertation, you’ll receive an excellent project which meets all your requirements and highest academic standards.</p>
<p>Writing dissertation properly is vital for your degree. So, once you need online dissertation help, place an order here and we’ll care for your paper in a good manner. We promise to check your dissertation online on the modern plagiarism detection software, so it’ll be unique and customized. It has taken a decade of experience and thousands of accomplished online dissertations to attain so high level of reliability. Students from all around the world have already chosen us as their faithful helper with academic writing. Be sure, we won’t disappoint you as well.</p>
</section>

<section>
<header class="stripped">
<div style="display: inline-block" class="stripped__inner"><h2>Thesis writing service you are looking for</h2></div>
</header>
<p>Need urgent MBA thesis? No problem! All you have to do to get perfectly formatted Ph.D. thesis is to make four simple steps:</p>
<ul>
<li>Fill in our user-friendly order from;</li>
<li>Make a secure payment to buy thesis of your dreams;</li>
<li>Stay in touch with assigned thesis writer to manage the writing process from start to finish;</li>
<li>Download the high-quality project created according to all your instructions.</li>
</ul>

<p>Writing thesis could be quite overwhelming. But with our professional thesis help, you’ll forget about this challenge once and for all. Getting an original paper prepared from scratch exclusively for you is easier than you think. Keep calm and enjoy life while we’re lifting your academic writing to the new level of quality.</p>
</section>
         */ ?>

        </div>
    </div>
<?php endif; ?>

    </div>
 
<?php get_footer(); ?>