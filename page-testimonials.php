<?php get_header() ?>

<div class="content">
    <?php get_sidebar() ?>
    <div class="page">
        <?php 
            banner(array(
                'title' => 'Testimonials',
                'subtitle' => 'Learn what others have said about Aerials'
            ))
        ?>
        <div class="section">
            <?php 
            $testimonials = new WP_Query(array(
                'post_type' => 'testimonial',
                'posts-per-page' => '-1',
                'post_status' => 'publish',
                'orderby' => 'publish_date',
                 'order' => 'DESC'
            ));

            while($testimonials->have_posts()) {
                $testimonials->the_post(); ?>
                <div class="card">
                    <div class="card__name"><h2>
                        <?php the_title(); ?>
                        <?php 
                            if(get_field('rating') == 5) {
                                echo '<span class="stars"><span class="fas fa-star fa-xs star" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star" data-fa-transform="shrink-3"></span></span></h2></div>';
                            }
                            else if (get_field('rating') == 4) {
                                echo '<span class="stars"><span class="fas fa-star fa-xs star" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star-grey" data-fa-transform="shrink-3"></span></span></h2></div>';
                            }
                            else if (get_field('rating') == 3) {
                                echo '<span class="stars"><span class="fas fa-star fa-xs star" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star-grey" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star-grey" data-fa-transform="shrink-3"></span></span></h2></div>';
                            }
                            else if (get_field('rating') == 2) {
                                echo '<span class="stars"><span class="fas fa-star fa-xs star" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star-grey" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star-grey" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star-grey" data-fa-transform="shrink-3"></span></span></h2></div>';
                            }
                            else if (get_field('rating') == 1) {
                                echo '<span class="stars"><span class="fas fa-star fa-xs star" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star-grey" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star-grey" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star-grey" data-fa-transform="shrink-3"></span><span class="fas fa-star fa-xs star-grey" data-fa-transform="shrink-3"></span></span></h2></div>';
                            }
                        ?>
                    <p><?php the_field('testimonial'); ?></p>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="add">
            <h3 class="text-light">Give Us Your Thoughts!</h3>
            <button class="btn btn-light" onclick="window.location.href='<?php echo site_url("/send-a-testimonial") ?>'"><a class="text-dark">Send a Testimonial</a></button>
        </div>
        <?php get_footer() ?>
    </div>
    <?php wp_footer(); ?>
</div>