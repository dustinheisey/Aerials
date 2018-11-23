<?php get_header() ?>

<div class="content">
    <?php get_sidebar() ?>
    <div class="page">
        <div class="center">
        <img src="<?php the_field('image'); ?>" class="img-large">
        </div>
        <?php get_footer(); ?>
    </div>
    <?php wp_footer(); ?>
</div>