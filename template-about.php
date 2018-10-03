<?php
/**
 * Template Name: About
 */

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<div class="hero">
    <div class="container">
        <div class="wrap">
            
            <h1>What, why </h1>

        </div><!-- /wrap -->
    </div><!-- /container -->
</div><!-- /about-hero -->

<div class="about-info">
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
        
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="what">
                <p>Digital Academy is a student program for people who wants to master the skills of marketing, data analysis and software engineering.</p>
            </div>
            <div role="tabpanel" class="tab-pane" id="why">
                <p>A lot of companies struggle to find great digital marketers, analysts and software engineers. We realized that we could help create the digital minds of tomorrow.</p>
            </div>
            <div role="tabpanel" class="tab-pane" id="who">
                <p>The Digital Academy is a digital collaborative spearheaded by some of Denmark's finest tech companies in Lead Supply (Matchbanker), Boligportal & Letloop located under the same roof in center of the IT hub of Aarhus, Katrinebjerg.</p>
            </div>
        </div><!-- /tab-content -->

        
        
        
        
        <div class="row" style="display: none;">
        
            <div class="col-sm-4">
                <h2>What</h2>
                <p>Digital Academy is a student program for people who wants to master the skills of marketing, data analysis and software engineering.</p>
            </div>
            
            <div class="col-sm-4">
                <h2>Why</h2>
                <p>A lot of companies struggles to find great digital marketers, analysts and software engineers. We realized that we could help create the digital minds of tomorrow.</p>
            </div>
            
            <div class="col-sm-4">
                <h2>Who</h2>
                <p>The Digital Academy is a digital collaborative spearheaded by some of Denmark's finest tech companies in Lead Supply (Matchbanker), Boligportal & Letloop located under the same roof in center of the IT hub of Aarhus, Katrinebjerg.</p>
            </div>
        
        
        </div><!-- /row -->
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
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/letloop-logo.png" class="company-logo img-responsive" alt="Letloop" />
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
                <p>We operate in the financial sector across multiple markets, helping millions of consumers compare loans through brands like Matchbanker. At the moment, we are active in 6 countries: Denmark, Sweden, Norway, Spain, Poland and Finland, but we are continuously adding new countries to our portfolio. Our mission is to create the future of banking, and we strive to be the market leader in Europe by the end of 2019.</p>
                <div class="cta"><a href="https://leadsupply.dk" target="_blank" class="btn btn-default btn-round">Visit Leadsupply</a></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="boligportal">
                <p>"BoligPortal is Denmark’s leading matchmaker in the market of rental housing; we are bringing tenants and landlords together online. We are constantly striving to improve and expand our business with new products, a disruptive approach to the market and prospects of expanding internationally.</p>
                <p>Our teams; product development, marketing and sales work across all digital disciplines likes, digital and product UX, full stack, coding, Product management traffic management from Google, social media, partnerships, brand building and all heavily impacted by the crunching and use data in context of CRM, customer experience and business development.</p>
                <p>In all teams, you will work with own assignments and responsibilities in close collaboration with the rest of the team. (We look forward to welcoming you in our young and informal workplace.)"</p>
                <div class="cta"><a href="https://boligportal.dk" target="_blank" class="btn btn-default btn-round">Visit Boligportal</a></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="letloop">
                <p>In Letloop we strive relentlessly to help landlords through the jumble of laws, rules and complex processes. It must be easy to be a good landlord! We do this by utilizing new technologies in making user-friendly services that help the landlord securely and efficiently through the numerous jobs to be done - from making the lease contract when the tenant moves in to calculating the final statement when the tenant move out. We seek to challenge the status quo, automate the manual and remove unnecessary friction. And we do not hesitate to change course when we get smarter in the process.</p>
                <p>The team behind Letloop is a dedicated band of enthusiasts consisting of backend, frontend and business end. In close collaboration with BoligPortals specialists in marketing, customer service, product development and sales, we ensure a good all-encompassing user experience for customers. We build our services using React, Redux, Flow, Jest, Webpack and node.js but are constantly exploring technologies that will do the job better – and for the right people that can help us in our journey.</p>
            </div>
            <div role="tabpanel" class="tab-pane" id="northmediaonline">
                <p>North Media A/S is the big muscle behind the scenes pulling the strings and has many years of experience with driving and scaling successful business'. North Media A/S is the only listed media group in Denmark. All Digital Academy companies are a part of North Media A/S’ Online division, North Media Online. Since the establishment of North Media in 1965, its corporate mission has been to communicate advertisements and information to consumers.</p>
                <div class="cta"><a href="http://northmedia.dk" target="_blank" class="btn btn-default btn-round">Visit North Media</a></div>
            </div>
        </div><!-- /tab-content -->
                
    </div><!-- /container -->
</div>


<div class="about-map" id="about-map"></div>

<div class="container">
    <div class="about-map-text">
        
        <ul class="contact-info">
            <li><a href="mailto:info@digitalacademy.dk">info@digitalacademy.dk</a></li>
            <li>Paludan-Müllers Vej 40B, 8200 Aarhus N</li>
        </ul>
        
    </div><!-- /map-text -->
</div><!-- /container -->



<script>
	var map;
	function initMap() {
		var myLatlng = {lat: 56.171488, lng: 10.184892};

		map = new google.maps.Map(document.getElementById('about-map'), {
			center: myLatlng,
			zoom: 16,
			gestureHandling: 'cooperative',
			scrollwheel: false
		});
		
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'Digital Academy Aarhus'
        });
		
		var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h4 id="firstHeading" class="firstHeading">Digital Academy Aarhus</h4>'+
            '<div id="bodyContent">'+
            '<p>Paludan-Müllers Vej 40B<br>'+ 
            '8200 Aarhus N, Denmark</p>'+
            '</div>'+
            '</div>';

		var infowindow = new google.maps.InfoWindow({
			content: contentString,
			maxWidth: 300
        });
        infowindow.open(map, marker);
        
        marker.addListener('click', function() {
	        infowindow.open(map, marker);
        });
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDvnlWD_sn0PwJobSgaX1-KbYX2aXlz7o&callback=initMap" async defer></script>