<?php get_header() ?>

<div class="content">
    <?php get_sidebar() ?>
    <div class="page">

        <?php 
            while(have_posts()) {
                the_post(); 
                banner(array(
                    'title' => 'Send A Testimonial',
                    'subtitle' => 'Give Us Your Thoughts'
                ));
        ?>
            <div class="section">
                <div class="card">
                <?php the_content(); ?>
                </div>
            </div>
        <?php
            }
         get_footer() ?>
    </div>
    <?php wp_footer(); ?>
</div>