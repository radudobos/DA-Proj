<div id="cont" class="about-info">

    <div class="container">
        
        <ul class="whatwhywho" role="tablist">
            <li role="presentation" class="active">
                <a href="#what" aria-controls="what" role="tab" data-toggle="tab">What</a>
            </li>
            <li role="presentation">
                <a href="#why" aria-controls="why" role="tab" data-toggle="tab">Why</a>
            </li>
            <li role="presentation">
                <a href="#who" aria-controls="who" role="tab" data-toggle="tab">Who</a>
            </li>
        </ul><!-- /companies -->
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="what">
                <p><?php echo get_post_meta($post->ID, 'what', true); ?></p>
            </div>
            <div role="tabpanel" class="tab-pane" id="why">
                <p><?php echo get_post_meta($post->ID, 'why', true); ?></p>
            </div>
            <div role="tabpanel" class="tab-pane" id="who">
                <p>
                <?php echo get_post_meta($post->ID, 'who', true); ?>
                </p>
            </div>
        </div>
        <?php endwhile; // end of the loop. ?>
    </div>

</div>