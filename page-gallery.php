<?php get_header() ?>

<div class="content">
    <?php get_sidebar() ?>
    <div class="page">

        <?php 
            banner(array(
                'title' => 'Gallery',
                'subtitle' => 'Check Out Our Recent Photos'
            ));
        ?>
        <div class="gallery">
            <?php 
            $images = new WP_Query(array(
                'post_type' => 'photo',
                'posts_per_page' => '-1',
                'post_status' => 'publish',
                 'orderby' => 'publish_date',
                  'order' => 'DESC'
            ));

            while($images->have_posts()) {
                $images->the_post(); 
            ?>
                <a href="<?php the_permalink(); ?>"><img src="<?php the_field('image'); ?>" alt="Aerial's Gymnastics"></a>
            <?php } ?>

        </div>
        <div class="add">
            <h3 class="text-light">Add to Our Gallery!</h3>
            <button class="btn btn-light" onclick="window.location.href='<?php echo site_url("/send-a-photo") ?>'"><a class="text-dark">Send a Photo</a></button>
        </div>
        <?php get_footer() ?>
    </div>
    <?php wp_footer(); ?>
</div>