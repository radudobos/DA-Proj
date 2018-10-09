<div class='intro events-intro' id="events-section">
    <div class='container'>
        <h2>Where to find us ?</h2>

        <?php while ( have_posts() ) : the_post(); ?>
        <div class='row event-cards '>
            <div class='col-sm-4'>
                <div class='col-sm-12'>
                    <h3><?php echo get_post_meta($post->ID, '#1_event_name', true); ?></h3>
                    <h4><?php echo get_post_meta($post->ID, '#1_event_date', true); ?></h4>
                    <p><?php echo get_post_meta($post->ID, '#1_event_location', true); ?></p>
                    <div class="cta">
                                <a href="<?php echo get_post_meta($post->ID, '#1_event_link', true); ?>" class="btn btn-round" target="_blank">Read more</a>
                    </div>
                </div>
            </div>
            <div class='col-sm-4'>
                <div class='col-sm-12'>
                        <h3><?php echo get_post_meta($post->ID, '#2_event_name', true); ?></h3>
                        <h4><?php echo get_post_meta($post->ID, '#2_event_date', true); ?></h4>
                        <p><?php echo get_post_meta($post->ID, '#2_event_location', true); ?></p>
                        <div class="cta">
                                    <a href="<?php echo get_post_meta($post->ID, '#2_event_link', true); ?>" class="btn btn-round" target="_blank">Read more</a>
                        </div>
                </div>
            </div>
            <div class='col-sm-4'>
                <div class='col-sm-12'>
                        <h3><?php echo get_post_meta($post->ID, '#3_event_name', true); ?></h3>
                        <h4><?php echo get_post_meta($post->ID, '#3_event_date', true); ?></h4>
                        <p><?php echo get_post_meta($post->ID, '#3_event_location', true); ?></p>
                        <div class="cta">
                                    <a href="<?php echo get_post_meta($post->ID, '#3_event_link', true); ?>" class="btn btn-round" target="_blank">Read more</a>
                        </div>
                    </div>
            </div>

        </div>
        <?php endwhile; // end of the loop. ?>
    </div>
</div>