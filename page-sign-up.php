<?php get_header() ?>

<div class="content">
    <?php get_sidebar() ?>
    <div class="page">

        <?php 
            while(have_posts()) {
                the_post(); 
                banner(array(
                    'title' => 'Sign Up',
                    'subtitle' => 'Ready To Get Started?'
                ));
        ?>
            <div class="page__wrapper">
                <div class="page__content">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php
            }
         get_footer() ?>
    </div>
    <?php wp_footer(); ?>
</div>