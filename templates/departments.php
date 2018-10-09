<div class="intro departments">
    <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
        <h2>Meet the different<br>Departments</h2>
        <h3 class ='text-center'>From day one, you will be assigned to a specific department within one of the companies matching your profile and motivations.</h3>
    <!-- Marketing -->
        <div class="row department">
            <div class='col-sm-6 pic '>
                <img class='responsive'src="<?php echo get_template_directory_uri(); ?>/dist/images/online-marketing.jpg" alt="">
            </div>
            <div class='col-sm-6 text'>
                <h3>Digital Marketing</h3>
                <p><?php echo get_post_meta($post->ID, 'digital_marketing', true); ?></p>  
                <div class="cta">
                    <a href="<?php home_url(); ?>/career/"  class="btn btn-default btn-round">Read more</a>
                </div>
            </div>
        </div>
    <!-- UX Design -->
        <div class="row department">
            <div class='col-sm-6 text'>
                <h3>UX & Design</h3>
                <p><?php echo get_post_meta($post->ID, 'ux', true); ?></p>  
                <div class="cta">
                    <a href="<?php home_url(); ?>/career/"  class="btn btn-default btn-round">Read more</a>
                </div>
            </div>
            <div class='col-sm-6 pic '>
                <img class='responsive'src="<?php echo get_template_directory_uri(); ?>/dist/images/ux.jpg" alt="">
            </div>
        </div>
    <!-- Web Development -->
        <div class="row department">
            <div class='col-sm-6 pic '>
                <img class='responsive'src="<?php echo get_template_directory_uri(); ?>/dist/images/dev.jpg" alt="">
            </div>
            <div class='col-sm-6 text'>
                <h3>Web Development</h3>
                <p><?php echo get_post_meta($post->ID, 'web', true); ?></p>  
                <div class="cta">
                    <a href="<?php home_url(); ?>/career/"  class="btn btn-default btn-round">Read more</a>
                </div>
            </div>
        </div>

    <!-- Web Development -->
        <div class="row department">
            <div class='col-sm-6 text'>
                <h3>Other</h3>
                <p><?php echo get_post_meta($post->ID, 'other', true); ?></p>  
                <div class="cta">
                    <a href="<?php home_url(); ?>/career/"  class="btn btn-default btn-round">Read more</a>
                </div>
            </div>
            <div class='col-sm-6 pic '>
                <img class='responsive'src="<?php echo get_template_directory_uri(); ?>/dist/images/other.jpg" alt="">
            </div>
        </div>

    <?php endwhile; // end of the loop. ?>
    </div>
</div>
