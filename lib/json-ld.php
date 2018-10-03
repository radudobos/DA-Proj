<?php

require_once locate_template('templates/json-ld-partials/setup.php');

if (is_front_page()) {

	require_once locate_template('templates/json-ld-partials/organization.php');

	require_once locate_template('templates/json-ld-partials/video.php');

	require_once locate_template('templates/json-ld-partials/article.php');

}

if( is_page_template('template-loan-list.php') && !is_front_page() ) {

	require_once locate_template('templates/json-ld-partials/video.php');
}

if (is_single() && !is_singular('ls_loan') && !is_singular('ls_creditcard')) {

	require_once locate_template('templates/json-ld-partials/article.php');
	require_once locate_template('templates/json-ld-partials/video.php');
}

if ( is_singular('ls_loan') ) {

	$loan = new ls_loan( $post_data->ID );
	require_once locate_template('templates/json-ld-partials/review.php');

}

if ( is_single('ls_creditcard') ) {

	$creditcard = new ls_creditcard( $post_data->ID );
	require_once locate_template('templates/json-ld-partials/review.php');
}

?>

