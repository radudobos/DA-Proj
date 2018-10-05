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