<?php
/**
 * Template Name: Jobs
 */

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>


<div class="hero darken-overlay">
    <div class="container">
        
        <div class="wrap">
            
            <h1>Start your<br>career</h1>
            
        </div><!-- /wrap -->
        
    </div><!-- /container -->
        
</div><!-- /hero -->


<div class="internship-intro text-center">
    <div class="container">

        <h2>Become a digital rockstar</h2>
        <p>We always have a lot of open positions - both student and full time positions. Check them out here:</p>
        <a href="https://leadsupply.dk/jobs/" target="_blank" class="btn btn-default btn-round">Lead supply</a>
        <a href="https://boligportal.brandero.com/" target="_blank" class="btn btn-default btn-round">BoligPortal</a>

    </div><!-- /container -->
</div><!-- /internship-intro -->


<?php get_template_part('templates/collage'); ?>
<?php collage(); ?>