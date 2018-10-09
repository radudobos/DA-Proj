<?php
/**
 * Template Name: About
 */

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<div class="hero3 darken-overlay">
    <div class="container">
        <div class="wrap">
            
            <h1>About Us </h1>

        </div><!-- /wrap -->
    </div><!-- /container -->
</div><!-- /about-hero -->

<div class="about-info">
    <div class="container">
        <p class='about-text'>
            The Digital Academy was brought to life by some of the finest fintech companies in Denmark. 
            It is a unique program where the interns get assigned a position within the company which 
            specifically suits their motivation and interests. 
        </p>
    </div><!-- /container -->
</div><!-- /about-info -->


<div class="about-companies">
    <div class="container">
        
        <h2>Powered by</h2>
        
        <ul class="companies" role="tablist">
            <li role="presentation" class="active">
                <a href="#leadsupply" aria-controls="leadsupply" role="tab" data-toggle="tab">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/leadsupply-logo.png" class="company-logo img-responsive" alt="Lead Supply" />
                </a>
            </li>
            <li role="presentation">
                <a href="#boligportal" aria-controls="boligportal" role="tab" data-toggle="tab">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/boligportal-logo.png" class="company-logo img-responsive" alt="BoligPortal" />
                </a>
            </li>
            <li role="presentation">
                <a href="#letloop" aria-controls="letloop" role="tab" data-toggle="tab">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/BPB2.png" class="company-logo img-responsive" alt="BoligPortal Business Logo" />
                </a>
            </li>
            <li role="presentation">
                <a href="#northmediaonline" aria-controls="northmediaonline" role="tab" data-toggle="tab">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/northmedia-logo.png" class="company-logo img-responsive" alt="North Media Online" />
                </a>
            </li>
        </ul><!-- /companies -->
        
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="leadsupply">
                <p>Lead Supply is one of the fastest growing tech companies in Denmark, founded in 2014. We are currently 23 passionate and digital minded employees – and we are rapidly growing in numbers!</p>
                <p>We operate in the financial sector across multiple markets, helping millions of consumers compare loans through our platform Matchbanker. The aim is to match consumers with loan providers according to their personal needs. Our mission is to present the loan market in a more transparent way. At the moment, we are active in 9 countries: Denmark, Sweden, Norway, Spain, Poland, Finland, Croatia, Romania and the Czech Republic. We are rapidly expanding by continuously adding new countries to our portfolio. Our mission is to create the future of banking, and we strive to be the market leader in Europe by the end of 2019.</p>
                <div class="cta"><a href="https://leadsupply.dk" target="_blank" class="btn btn-default btn-round">Visit Leadsupply</a></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="boligportal">
                <p>BoligPortal is Denmark’s leading matchmaker in the market of rental housing, which is bringing tenants and landlords together in an online world. By constant striving to improve and expand our business with new products, we were able to place our service into new international markets. Right now, we are present not only in Denmark, but also in Sweden with BostadsPortal and in Germany with SoWohnt. And there is even more to come, as BoligPortal is always looking for opportunities to expand.</p>
                <p>Our departments of Product Development, Marketing and Sales collaborate with each other in order to offer our clients the best product. While working for BoligPortal you will be assigned with your own tasks and responsibilities in close collaboration with other coworkers. We look forward to welcoming you in our young and dynamic environment.</p>
                <div class="cta"><a href="https://boligportal.dk" target="_blank" class="btn btn-default btn-round">Visit Boligportal</a></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="letloop">
                <p>In BoligPortal Business we are helping landlords through the jumble of laws, rules and complex processes. We do this by utilizing new technologies and providing user-friendly services to the landlords. They securely and efficiently make the lease contract when the tenant moves in and calculate the final statement, when the tenant move out. </p>
                <p>The team behind BoligPortal Business is a dedicated group of enthusiasts consisting of backend, frontend and business end. In close collaboration with BoligPortal’s specialists in marketing, customer service, product development and sales, we ensure an all-encompassing user experience for customers. </p>
            </div>
            <div role="tabpanel" class="tab-pane" id="northmediaonline">
                <p>North Media was established in 1965 and its corporate mission has been to communicate advertisements and information to consumers. North Media A/S is the only listed media group in Denmark. All Digital Academy companies are a part of North Media A/S’ Online division, North Media Online.</p>
                <div class="cta"><a href="http://northmedia.dk" target="_blank" class="btn btn-default btn-round bt-style">Visit North Media</a></div>
            </div>
        </div><!-- /tab-content -->
                
    </div><!-- /container -->
</div>
<?php get_template_part('templates/offerpack') ?>
<?php get_template_part('templates/collage'); ?>
    <div class='container'>
        <?php collage( 0 ); ?>
    </div>