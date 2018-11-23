<?php get_header() ?>
        <div class="content">
            <?php get_sidebar() ?>
            <div class="page">
                <div class="home-content">
                    <img src="http://aerialsgymnastics.net/wp-content/uploads/2018/04/13246432_1014877325275701_5688502909061738482_o.jpg" alt="Aerials Gymnastics" class="home__img">
                    <div class="home-grid">

                        <div class="home__events">
                            <h2>Recent Events</h2>
                                <?php 
                                    global $post;
                                    $events = tribe_get_events(array(
                                        'posts_per_page' => 3,
                                        'orderby' => 'EventStartDate',
                                        'order' => 'asc'
                                    ));

                                    foreach($events as $post) {
                                        ?>
                                        <div class="home__event">
                                            <div class="event__date">
                                                <span class="event__month"> <?php echo tribe_get_start_date( $post, false, 'M' ); ?> </span>
                                                <span class="event__day"> <?php echo tribe_get_start_date( $post, false, 'd' ); ?> </span>
                                            </div>
                                            <div class="event__info">
                                                <h4><a href="<?php echo tribe_event_link($post); ?>" class="text-dark link-primary"><?php echo $post->post_title ?></a></h2>
                                                <p><?php echo tribe_get_start_date( $post, false, 'g:iA' ); ?> - <?php echo tribe_get_end_date( $post, false, 'g:iA'); ?></p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                ?>
                        </div>

                        <div class="home__call">
                            <h2>Welcome To Aerials!</h2>
                            <p style="margin: 5vh 3vw;">Why is it so hard to find a gym that pushes you to be great but also allows you to have fun? Find out why Aerials Gymnastics isn't like other gyms. Find out why we call our team our family, and how you too can be a part of it.</p>
                            <button class="btn btn-dark btn-large" onclick="window.location.href='<?php echo site_url("/about") ?>'"><a class="text-light">Check this out</a></button>
                        </div>

                        <div class="home__testimonials">
                            <h2 style="text-align: center;">Look what others are saying about us!</h2>
                            <div class="home-testimonials__body">
                                <div class="home__testimonial"><h4>Amy Pleshet</h4><p>"I wish I had found Aerials first, this is our second gym, my daughter has progressed so much since coming to Aerials, it was a true blessing to find this gym. Marsha and the other coaches are amazing and really love the kids and want them to succeed!! Thanks Aerials!!"</p></div>
                                <div class="home__testimonial"><h4>Bonnie Kopplin</h4><p>"This was my home away from home for 13 years! Now my two kiddos go here! Marsha (the owner) was and still is like a second mom! Couldn't ask for more! This will be the only place my kids do gymnastics at! This place is where I had some of the best times of my life! <3"</p></div>
                            </div>
                        </div>

                    </div>
                </div>
                <?php get_footer() ?>
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>