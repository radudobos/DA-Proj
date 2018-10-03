<div class="internship-insta text-center" id='gallery'>
    <div class="container ">
       <h1>SEE THE INTERNS’ EVERYDAY LIFE</h1>
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div><!-- /container -->
</div><!-- /intro -->