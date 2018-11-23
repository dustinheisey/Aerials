<?php get_header() ?>

<div class="content">
    <?php get_sidebar() ?>
    <div class="page">

        <?php 
            while(have_posts()) {
                the_post(); 
                banner(array(
                    'title' => 'About Aerials',
                    'subtitle' => 'Where Dozens of Families Find Their Home Away From Home'
                ));
        ?>
            <ul class="nav-about">
                <li><a href="<?php echo get_page_link(420); ?>" class="text-dark link-primary">Summer Schedule</a></li>
                <li><a href="<?php echo get_page_link(424); ?>" class="text-dark link-primary">Fall Schedule</a></li>
            </ul>
            <div class="page__content">
                <?php the_content(); ?>
            </div>
        <?php
            }
         get_footer() ?>
    </div>
    <?php wp_footer(); ?>
</div>