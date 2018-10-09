<div class="partners">
    <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
        <h2><?php echo get_post_meta($post->ID, 'partners_h2', true); ?></h2>
        <p><?php echo get_post_meta($post->ID, 'partners_text', true); ?></p>
        
        <div class="partner-logos">
            
            <div class="partner-logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/partner-eaa.png" alt="Partner - EAA" /></div>
            <!-- <div class="partner-logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/partner-au.png" alt="Partner - AU" /></div> -->
            <div class="partner-logo"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/partner-google.png" alt="Partner - Google" /></div>
            
        </div><!-- /partner-logos -->
        <?php endwhile; // end of the loop. ?>
    </div><!-- /container -->
</div><!-- /partners -->