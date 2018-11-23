<?php get_header() ?>

<div class="content">
    <?php get_sidebar() ?>
    <div class="page">

        <?php 
            while(have_posts()) {
                the_post(); 
                banner(array(
                    'title' => 'Calendar',
                    'subtitle' => 'Check Out Whats Happening Soon'
                ));
        ?>
            <div class="page__content">
                <?php the_content(); ?>
            </div>
        <?php
            }
         get_footer() ?>
    </div>
    <?php wp_footer(); ?>
</div>