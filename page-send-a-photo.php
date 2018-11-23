<?php get_header() ?>

<div class="content">
    <?php get_sidebar() ?>
    <div class="page">

        <?php 
            while(have_posts()) {
                the_post(); 
                banner(array(
                    'title' => 'Send A Photo',
                    'subtitle' => 'Add To Our Gallery'
                ));
        ?>
            <div class="section">
                <div class="card card-full">
                <?php the_content(); ?>
                </div>
            </div>
        <?php
            }
         get_footer() ?>
    </div>
    <?php wp_footer(); ?>
</div>