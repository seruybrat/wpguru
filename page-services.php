<?php
/* Template Name: Services */
?>
<?php get_header(); ?>

<div class="content-page page-services">

    <section class="container block-section">
        <div class="row">
            <div class="col-xs-12 text-center">
                <header class="block-section__header block-section__header--1">
                    Our Clients Choose These Services
                </header>
            </div>
        </div>
        <div class="row">
            <section class="col-xs-12 services__main-services">
                <article class="col-lg-4 col-md-6 services__main-services__item">
                    <header class="services__main-services__item__title">Dissertation</header>
                    <div class="services__main-services__item__description">
                        Our team of Ph.D. writers specializes in writing original dissertations. Just name your topic, discipline and set
                        a deadline. The rest will be taken care of.
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 services__main-services__item">
                    <header class="services__main-services__item__title">Dissertation chapter</header>
                    <div class="services__main-services__item__description">
                        Need some help with an introduction, literature review
                        or methodology? We can write any chapter of your dissertation. High quality writing guaranteed.
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 services__main-services__item">
                    <header class="services__main-services__item__title">Editing</header>
                    <div class="services__main-services__item__description">
                        Make your dissertation a better one with our editing service. Simply give us your paper. Our skilled editors
                        will leave no mistakes in it.
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 services__main-services__item">
                    <header class="services__main-services__item__title">Abstract </header>
                    <div class="services__main-services__item__description">
                        Clueless about an abstract format?
                        Leave the job to our writers. They will craft an abstract that meets the academic standards.
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 services__main-services__item">
                    <header class="services__main-services__item__title">Thesis proposal
                    </header>
                    <div class="services__main-services__item__description">
                        Our experts can create a compelling thesis proposal.
                        Any topic and subject. Rest assured, your supervisor will remain impressed.
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 services__main-services__item">
                    <header class="services__main-services__item__title">Formatting</header>
                    <div class="services__main-services__item__description">
                        Troubles with referencing or structure?
                        We can polish the format of your paper with ease!
                        All we need is your instructions.
                    </div>
                </article>
            </section>
        </div>
    </section>

    <?php 
            function adv_title() {
                echo "Types and subject";
            };
    
            get_template_part('inc', 'adv-writing'); 
    ?>

    <?php get_template_part('inc', 'slider'); ?>

    <?php get_template_part('inc', 'examples'); ?>

    <?php get_template_part('inc', 'guarantee'); ?>
    
</div>

<?php get_footer(); ?>
