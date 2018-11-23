<?php get_header() ?>

<div class="content">
    <?php get_sidebar() ?>
    <div class="page">

        <?php 
            while(have_posts()) {
                the_post(); 
                banner(array(
                    'title' => 'Summer Schedule',
                    'subtitle' => ''
                ));
        ?>
            <div class="nav-about about-back">
                <a class="link link-dark link-primary" href="<?php echo site_url('/about') ?>">Back</a>
            </div>
            <div class="page__content">
                <?php the_content(); ?>
            </div>
        <?php
            }
         get_footer() ?>
    </div>
    <?php wp_footer(); ?>
</div>