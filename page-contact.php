<?php get_header() ?>

<div class="content">
    <?php get_sidebar() ?>
    <div class="page">

        <?php 
            while(have_posts()) {
                the_post(); 
                banner(array(
                    'title' => 'Contact',
                    'subtitle' => 'Tell Us Your Thoughts'
                ));
        ?>
            <div class="contact">
                <?php the_content(); ?>
            </div>
        <?php
            }
         get_footer() ?>
    </div>
    <?php wp_footer(); ?>
</div>