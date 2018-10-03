<?php

class sage_youtube_shortcode
{
	function __construct() {

		// Shortcode
		add_shortcode( 'sage_youtube_shortcode', array( $this, 'youtube_shortcode' ) );
	}

	public function youtube_shortcode( $atts ) {

		ob_start();

		// retrieve shortcode attributes
		extract( shortcode_atts( array(
			'id'       => '',
		), $atts ) );

		?>
		<div class="embed-responsive embed-responsive-16by9">
			<div class="youtube" id="<?php echo $atts['id'] ?>" data-params="rel=0&modestbranding=1&showinfo=0&controls=1&vq=hd720"></div>
		</div>

		<?php

		return ob_get_clean();
	}

}
new sage_youtube_shortcode;